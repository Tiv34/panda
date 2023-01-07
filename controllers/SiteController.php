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
            $model->password = $model->username;
            if ($model->login()) return $this->goBack();
        }

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
     * Displays contact page.
     *
     * @return Response|string
     * @throws Exception
     */
    public function actionPoll(): Response|string
    {
        $model = new PollForm();
        if (Yii::$app->request->post('answer')) {
            $post = Yii::$app->request->post();
            $t = strtotime('now');
            $data = [
                'date_answer' => date('y-m-d H:i:s',$t),
                'question_id' => $post['question_id'],
                'user_id' => 1
            ];
            foreach ($post as $key => $value) {
                if ($value === 'on') {
                    $data['answer_id'] = $key;
                    $this->question->saveAnswer($data);
                }
            }
        }
        if (Yii::$app->request->post('next')) {
            $question = $this->question->getQuestionByUser();
            if (empty($question)) {
                return $this->redirect(['site/poll-end']);
            }
            $view = match ($question['type']) {
                '1' => 'checkbox',
                '2' => 'single',
                '3' => 'rate',
                default => 'poll-end',
            };
            $answer = $this->question->getAnswerByQuestion($question['id']);
            return $this->render('poll/'. $view, [
                'model' => $model,
                'question' => $question,
                'answer' => $answer
            ]);
        }
        return $this->render('poll/page-1', [
            'model' => $model,
        ]);
    }

    public function actionPollEnd(): Response|string
    {
        if (Yii::$app->request->post('repeat')) {
            return $this->redirect(['site/poll']);
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
