<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use app\assets\PollAsset;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

PollAsset::register($this);

$this->registerJsFile('@web/js/poll/page.js');
$this->registerCssFile('@web/css/poll/page.css');
?>
<script src="https://unpkg.com/@mojs/core"></script>
<script src="https://cdn.jsdelivr.net/npm/@mojs/player"></script>


<div class="contrain" id="js-constrain">
    <div class="block-poll">
        <div class="block-poll-content">
            <img class="round-title-img" src="/img/title-pull.jpg">
        </div>
        <div class="block-poll-content">
            <h1>Добрый день, дорогой читатель!</h1>

            <p>Добрый день, дорогой читатель!
                Ты попал в закрытый клуб* «Влиятельные личности Оли Александровой».
                Каждый член клуба повлиял на то, кем я сейчас являюсь.</p>
            <p>В знак благодарности за себя приглашаю тебя на свой очередной юбилей в 2023 году.</p>
            <p>Пройди, пожалуйста, короткий опрос и в зависимости от ответов следи за дальнейшим развитием сайта.</p>

            <?php $form = ActiveForm::begin([
                'id' => 'poll-form',
            ]); ?>
        </div>
    </div>
    <div class="form-group">
        <input name="next" value="1" hidden>
        <?= Html::submitButton('Далее', ['class' => 'submit-next-btm', 'name' => 'login-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>