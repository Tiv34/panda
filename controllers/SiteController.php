<?php

namespace app\controllers;

use app\models\dto\Present;
use app\models\dto\User;
use app\models\PollForm;
use app\models\Question;
use Throwable;
use Yii;
use yii\data\Pagination;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;

class SiteController extends Controller
{
    private Question $question;

    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['login', 'logout', 'index', 'poll', 'gallery', 'present'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index', 'poll', 'logout', 'gallery', 'present'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function __construct($id, $module, $config = [])
    {
        $this->question = new Question();
        parent::__construct($id, $module, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return Response | string
     * @throws Throwable
     */
    public function actionIndex(): Response|string
    {
        $identity = Yii::$app->user->getIdentity();
        $query = User::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->where(['show' => 1])->count()]);
        $pages->defaultPageSize = 10;
        $strong_users = User::findAll(['group_guest'=>$identity->group_guest]);
        $limit = $pages->limit;
        if ($identity->group_guest !== 1 && $identity->show === 1) {
            if ($pages->offset === 0) {
                $limit = $pages->limit - count($strong_users);
            }
            $models = $query->offset($pages->offset - count($strong_users))
                ->where(['<>','group_guest', $identity->group_guest])
                ->andWhere(['show' => 1])
                ->limit($limit)
                ->all();
            if ($pages->offset === 0) {
                array_splice($models, 2, 0, $strong_users);
            }
        } else {
            $models = $query->offset($pages->offset)
                ->where(['show' => 1])
                ->limit($limit)
                ->all();
        }

        foreach ($models as $value) {
            if (empty($value->img)) {
                $value->img = '/img/guest/icon' . rand(1, 8) . '.jpg';
                $value->save();
            }
        }

        $present = Present::find()->joinWith('presentUser')->all();

        return $this->render('index', [
            'models' => $models,
            'present' => $present,
            'pages' => $pages,
            'user' => $identity
        ]);

    }

    public function actionPresent()
    {
        var_dump(111);die;

        if(\Yii::$app->request->isAjax) {
            $identity = Yii::$app->user->getIdentity();
            $present_id = \Yii::$app->request->post('radio_option');
            if (!empty($present_id)) {
                $presentRecord = Present::findOne(['id'=>(int)$present_id]);
                if ($presentRecord) {
                    $user = User::findOne(['id'=>$identity->getId()]);
                    $user->present_id = $present_id;
                    $user->save();
                }
            }
            $present = Present::find()->joinWith('presentUser')->all();
            return $this->renderAjax('wishlist', ['present' => $present, 'identity' => $user]);
        }
        return false;
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin(): Response|string
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->username = preg_replace('~\D+~', '', $model->username);
            $model->password = $model->username;
            if ($model->login()) {
//                return $this->redirect(['poll']);
                return $this->goHome();
            } else {
                $model->addError('username', 'Неверный телефон. Обратитесь к администратору');
            }
        }
        $model->username = '';
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout(): Response
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * @return string
     */
    public function actionGallery(): string
    {
        return $this->render('gallery', ['mini'=>false]);
    }

    /**
     * @throws Exception
     * @throws Throwable
     */
    public function actionPoll(): Response|string
    {
        $model = new PollForm();
        $post = Yii::$app->request->post();
        if (Yii::$app->request->isPjax && !empty($post['data_answer'])) {
            $t = strtotime('now');
            $data = [
                'date_answer' => date('y-m-d H:i:s', $t),
                'question_id' => $post['question_id'],
                'user_id' => Yii::$app->user->getId()
            ];
            if (is_array($post['data_answer'])) {
                foreach ($post['data_answer'] as $value) {
                    $data['answer_id'] = $value;
                    $this->question->saveAnswer($data);
                }
            } else {
                $data['answer_id'] = $post['data_answer'];
                // можно ли использовать фотку гостя
                if ($data['question_id'] == 9) {
                    $user = User::findOne(['id'=>$data['user_id']]);
                    if ($data['answer_id'] == 29) { // ДА
                        $user->img = '/img/guest/' . $data['user_id'] . '.jpg';
                    } else { // НЕТ
                        $user->img = '/img/guest/icon' . rand(1, 8) . '.jpg';
                    }
                    $user->save();
                }
                $this->question->saveAnswer($data);
            }
        }
        $user = Yii::$app->user->getId();
        $count_answer_user = count($this->question->getCheckAnswer($user));
        $question = $this->question->getQuestionByUser($user);
        $answerSkip = $this->question->getCheckAnswerSkip($user);
        if (empty($question) || $answerSkip) {
            return $this->redirect(['site/poll-end']);
        }
        $answer = $this->question->getAnswerByQuestion($question['id']);
        $count_question = $this->question->getQuestionByUserCount();
        return $this->render('poll/index', [
            'model' => $model,
            'question' => $question,
            'count_question' => $count_question,
            'count_user_answer' => $count_answer_user,
            'answer' => $answer
        ]);
    }

    public function actionPollEnd(): Response|string
    {
        if (Yii::$app->request->post('repeat') == '1') {
            $this->question->updateAnswerByUser(Yii::$app->user->getId());
            return $this->redirect(['poll']);
        }
        return $this->render('poll/end', []);
    }

    public function actionPollAnswer(): array
    {
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $data = Yii::$app->request->post();
            parse_str($data['data'], $params);
            $answerRecord = $this->question->getAnswerByQuestion($params['question_id']);
            $all_answer = $this->question->getAllUsersAnswerByQuestion($params['question_id']);
            $user_answer_count = $this->question->getAllUsersCountAnswerByQuestion($params['question_id']);
            $ff = [];
            foreach ($answerRecord as $answerDb) {
                $ff[$answerDb['id']] = [
                    'answer_id' => $answerDb['id'],
                    'count' => 0
                ];
            }
            foreach ($all_answer as $value) {
                $ff[$value['answer_id']]['count'] = (int)$value['count'];
            }
            foreach ($answerRecord as $answerDb) {
                if (isset($params['data_answer'])) {
                    if (is_array($params['data_answer'])) {
                        foreach ($params['data_answer'] as $param) {
                            if ($answerDb['id'] == $param) {
                                $ff[$param]['count'] = $ff[$param]['count'] + 1;
                            }
                        }
                    } else {
                        $ff[$params['data_answer']]['count'] = $ff[$params['data_answer']]['count'] + 1;
                        break;
                    }
                }
            }
            $answer_count = (int)$user_answer_count['user_count'];
            if (isset($params['data_answer'])) {
                $answer_count = (int)$user_answer_count['user_count'] + 1;
            }
            $all_answer_data = [];
            foreach ($ff as $value) {
                $all_answer_data[$value['answer_id']] = round(100 / $answer_count * $value['count']);
            }
            return $all_answer_data;
        }
        return [];
    }

    public function actionPhotoInstall(): string
    {
        $users = User::find()->all();
        foreach ($users as $user) {
            $user->img = '/img/guest/' . $user->id . '.jpg';
            $user->save();
        }
        return 'photo install';
    }
}
