<?php

use app\assets\PollAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/** @var array $question */
/** @var array $answer */
/** @var int $count_user_answer */
/** @var int $count_question */
PollAsset::register($this);
$this->registerCssFile('@web/css/poll/page.css');
$this->registerCssFile('@web/css/poll/checkbox.css');
$this->registerCssFile('@web/css/poll/star.css');
$this->registerJsFile('@web/js/poll/click.js');
?>

<div id="pyramid">
    <img class="round-title-img" src="/img/geometric.png">
</div>
<div id="pyramid_2">
    <img class="round-title-img" src="/img/geometric.png">
</div>

<div class="contrain mt-10">
    <div class="block-poll-bg">
        <div class="block-poll block-poll-center">
            <div id="myProgress">
                <div id="myBar"></div>
            </div>
            <?php Pjax::begin(['id' => 'w-100']); ?>
            <div class="text-center">
                <h1 class="mb-4"><?= $question['name'] ?></h1>
                <?php
                $form = ActiveForm::begin([
                    'id' => 'poll-form',
                    'options' => ['data-pjax' => true],
                    'action' => ['poll'],
                    'method' => 'post'
                ]);
                $this->registerJsFile('@web/js/poll/remained.js');
                ?>
                <?php if (!empty($answer))
                    switch ($question['type']) {
                        case '1':
                            foreach ($answer as $value) { ?>
                                <div class="inputGroup">
                                    <input id="option_<?= $value['id'] ?>" name="data_answer[]"
                                           value="<?= $value['id'] ?>" type="checkbox" hidden/>
                                    <label class="chevk" for="option_<?= $value['id'] ?>"><?= $value['name'] ?></label>
                                </div>
                            <?php }
                            break;
                        case '2':
                            foreach ($answer as $value) { ?>
                                <div class="inputGroup">
                                    <input id="option_<?= $value['id'] ?>" name="data_answer"
                                           value="<?= $value['id'] ?>"
                                           type="radio" hidden/>
                                    <label for="option_<?= $value['id'] ?>"><?= $value['name'] ?></label>
                                </div>
                            <?php }
                            break;
                        case '3':
                            $this->registerJsFile('@web/js/poll/star.js');
                            $i = 1;
                            foreach ($answer as $value) { ?>
                                <svg class="star" data-rating="<?= $i ?>" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="34 / Actions / Star">
                                        <path fill="currentColor" fill-rule="evenodd"
                                              d="M14.1418 9.97916L13.7932 9.2042L11.9992 5.21626L10.2052 9.20418L9.85664 9.97913L9.01273 10.0785L4.64655 10.5927L7.95896 13.3465L8.67922 13.9453L8.45733 14.8553L7.44418 19.0104L11.2649 16.8656L11.9992 16.4534L12.7334 16.8656L16.5551 19.0109L15.5427 14.855L15.321 13.9452L16.0411 13.3465L19.3534 10.5928L14.9858 10.0785L14.1418 9.97916ZM8.83729 8.58881L3.31408 9.23927C2.44141 9.34204 2.11606 10.4396 2.79175 11.0014L7.00002 14.5L5.7144 19.7725C5.50729 20.6219 6.41308 21.3094 7.17544 20.8814L11.9992 18.1736L16.8236 20.8818C17.5859 21.3097 18.4916 20.6224 18.2847 19.773L17 14.5L21.2082 11.0014C21.8839 10.4397 21.5586 9.34207 20.6859 9.23932L15.1612 8.58881L12.9112 3.58724C12.5574 2.80091 11.4409 2.80092 11.0872 3.58725L8.83729 8.58881Z"/>
                                    </g>
                                </svg>
                                <input class="radio-rating answer-checker" type="radio" name="data_answer" id="data_answer_<?=$i?>"
                                       value="<?= $value['id'] ?>" hidden>
                                <?php $i++;
                            }
                            break;
                    } ?>
                <div class="form-group text-center mt-8">
                    <input name="type_poll" value="<?= $question['type'] ?>" hidden>
                    <input name="question_id" value="<?= $question['id'] ?>" hidden>
                    <input name="count_question" value="<?= $count_question ?>" id="count_question" hidden>
                    <input name="load_form" value="<?= $count_user_answer ?>" id="load_form" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm','id'=>'poll-fr0', 'name' => 'answer', 'value' => 1]) ?>
                </div>
                <?php $form->end(); ?>
            </div>
            <?php
            Pjax::end();
            ?>
        </div>
    </div>
</div>
