<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\widgets\MaskedInput;

$this->title = 'Авторизация';
$this->registerCssFile('@web/css/login.css');
$this->registerCssFile('@web/css/poll/checkbox.css');
$this->registerJsFile('@web/js/mask.js');

?>
<div class="site-login">
    <div class="col-md-4 mx-auto bg-content block-poll">
        <div class="w-100 text-center mb-3">
            <h1>Привет!</h1>
        </div>
        <div class="block-poll-content mb-3">
            <img class="round-title-img" src="/img/title-pull.jpg">
        </div>
        <div class="block-poll-content">
            <p>
                Ты попал в закрытый клуб «Влиятельные личности Оли Александровой». Каждый член клуба повлиял на то, кем я сейчас являюсь.</p>
            <p>Приглашаю тебя на свой юбилей в 2023 году.</p>
            <p>Пройди, пожалуйста, короткий опрос и в зависимости от ответов следи за дальнейшим развитием сайта.</p>
            <p>Для входа в систему необходимо ввести свой номер телефона:</p>
        </div>
        <div class="block-poll-content w-75-content">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username', ['options' => ['class' => 'mb-3']])->textInput(['autofocus' => true])->label('Телефон')->widget(MaskedInput::class, [
                'mask' => '+7 (999) 999-99-99',
            ]) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input}<span>Запомнит меня</span></div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="">
                    <?= Html::submitButton('Войти', ['class' => 'submit-poll-btm w-100', 'name' => 'login-button']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
