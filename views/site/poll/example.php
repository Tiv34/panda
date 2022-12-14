<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use app\assets\PollAsset;
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

PollAsset::register($this);
$this->registerCssFile('@web/css/poll/page.css');
$this->registerCssFile('@web/css/poll/checkbox.css');
$this->registerCssFile('@web/css/poll/star.css');
$this->registerJsFile('@web/js/poll/star.js');

?>
<style>
    .mt-10 {
        top: 90px;
    }
    @media only screen and (max-width: 700px) {
        .mt-10 {
            top: 40px;
        }
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
        <div class="block-poll block-poll-center">
            <div class="text-center">
                <h1 class="mb-4">Множественный выбор</h1>
                <div class="inputGroup">
                    <input id="option1" name="option1" type="checkbox" hidden/>
                    <label for="option1">Option 1 Option 1 Option 1 Option 1 Option 1 22222222222Option 1111111 Option Option</label>
                </div>

                <div class="inputGroup">
                    <input id="option2" name="option2" type="checkbox" hidden/>
                    <label for="option2">Option 2</label>
                </div>

                <div class="inputGroup">
                    <input id="option3" name="option3" type="checkbox" hidden/>
                    <label for="option3">Option 3</label>
                </div>

                <div class="inputGroup">
                    <input id="option4" name="option4" type="checkbox" hidden/>
                    <label for="option4">Option 4</label>
                </div>
                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group text-center mt-4">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <div class="block-poll-bg">
        <div class="block-poll block-poll-center">
            <div class="text-center">
                <h1 class="mb-4">Одиночный</h1>
                <div class="inputGroup">
                    <input id="radio_option1" name="radio_option" type="radio" hidden/>
                    <label for="radio_option1">Option 1 Option 1 Option 1 Option 1 Option 1 22222222222Option 1111111 Option Option</label>
                </div>

                <div class="inputGroup">
                    <input id="radio_option2" name="radio_option" type="radio" hidden/>
                    <label for="radio_option2">Option 2</label>
                </div>

                <div class="inputGroup">
                    <input id="radio_option3" name="radio_option" type="radio" hidden/>
                    <label for="radio_option3">Option 3</label>
                </div>

                <div class="inputGroup">
                    <input id="radio_option4" name="radio_option" type="radio" hidden/>
                    <label for="radio_option4">Option 4</label>
                </div>
                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group text-center mt-4">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <div class="block-poll-bg">
        <div class="block-poll block-poll-center">
            <div class="text-center">
                <h1 class="mb-4">Рейтинг</h1>
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <svg class="star" data-rating="<?= $i ?>" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="34 / Actions / Star">
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="M14.1418 9.97916L13.7932 9.2042L11.9992 5.21626L10.2052 9.20418L9.85664 9.97913L9.01273 10.0785L4.64655 10.5927L7.95896 13.3465L8.67922 13.9453L8.45733 14.8553L7.44418 19.0104L11.2649 16.8656L11.9992 16.4534L12.7334 16.8656L16.5551 19.0109L15.5427 14.855L15.321 13.9452L16.0411 13.3465L19.3534 10.5928L14.9858 10.0785L14.1418 9.97916ZM8.83729 8.58881L3.31408 9.23927C2.44141 9.34204 2.11606 10.4396 2.79175 11.0014L7.00002 14.5L5.7144 19.7725C5.50729 20.6219 6.41308 21.3094 7.17544 20.8814L11.9992 18.1736L16.8236 20.8818C17.5859 21.3097 18.4916 20.6224 18.2847 19.773L17 14.5L21.2082 11.0014C21.8839 10.4397 21.5586 9.34207 20.6859 9.23932L15.1612 8.58881L12.9112 3.58724C12.5574 2.80091 11.4409 2.80092 11.0872 3.58725L8.83729 8.58881Z"/>
                        </g>
                    </svg>
                    <input class="radio-rating answer-checker" type="radio" name="rating" hidden
                           value="<?= $i ?>">
                <?php } ?>
                <?php $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]); ?>
                <div class="form-group text-center mt-4">
                    <input name="next" value="1" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

