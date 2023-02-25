<?php

namespace app\controllers;

use app\models\PollForm;
use app\models\Question;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    private Question $question;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['login', 'logout', 'index', 'poll'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index', 'poll', 'logout'],
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
    public function actions()
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
     */
    public function actionIndex()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->contact(Yii::$app->params['adminEmail']);
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->username = preg_replace('~\D+~', '', $model->username);
            $model->password = $model->username;
            if ($model->login()) {
                return $this->goBack();
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
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * @return string
     */
    public function actionGallery()
    {
        return $this->render('gallery', []);
    }

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
                $this->question->saveAnswer($data);
            }
        }
        $count_answer_user = count($this->question->getCheckAnswer(Yii::$app->user->getId()));
        $question = $this->question->getQuestionByUser(Yii::$app->user->getId());
        if (empty($question)) {
            return $this->redirect(['site/poll-end']);
        }
        $answer = $this->question->getAnswerByQuestion($question['id']);
        $count_question = $this->question->getQuestionByUserCount(Yii::$app->user->getId());
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

    public function actionPollExample(): Response|string
    {
        $model = new PollForm();
        return $this->render('poll/example', [
            'model' => $model,
        ]);
    }
}
