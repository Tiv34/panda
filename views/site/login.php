<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Авторизация';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
        <div class="col-md-6 mx-auto">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Пожалуйста, заполните номер телефона для входа в систему:</p>

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

            <?= $form->field($model, 'username', ['options'=>['class'=>'mb-3']])->textInput(['autofocus' => true])->label('Телефон') ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} Запомнит меня</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
</div>
