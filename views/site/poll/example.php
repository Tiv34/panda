<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use app\assets\PollAsset;
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

PollAsset::register($this);
$this->registerCssFile('@web/css/poll/page.css');
$this->registerCssFile('@web/css/poll/checkbox.scss');

?>
<style>
    .mt-10 {
        margin-top: 200px;
    }
</style>

<div id="pyramid">
    <img class="round-title-img" src="/img/geometric.png">
</div>
<div id="pyramid_2">
    <img class="round-title-img" src="/img/geometric.png">
</div>

<div class="contrain mt-10">
    <div class="block-poll-bg">
        <div class="block-poll">
            <div>
                <h1>Множественный выбор</h1>
                <div class="inputGroup">
                    <input id="option1" name="option1" type="checkbox"/>
                    <label for="option1">Option One</label>
                </div>

                <div class="inputGroup">
                    <input id="option2" name="option2" type="checkbox"/>
                    <label for="option2">Option Two</label>
                </div>
                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <div class="block-poll-bg">
        <div class="block-poll">
            <div>
                <h1>Одиночный</h1>

                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <div class="block-poll-bg">
        <div class="block-poll">
            <div>
                <h1>Одиночный Да/Нет</h1>
                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <div class="block-poll-bg">
        <div class="block-poll">
            <div>
                <h1>Рейтинг</h1>
                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

