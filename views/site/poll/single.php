<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */
/** @var array $question */
/** @var array $answer */

use app\assets\PollAsset;
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

PollAsset::register($this);
$this->registerCssFile('@web/css/poll/page.css');
$this->registerCssFile('@web/css/poll/checkbox.css');

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
            <div class="text-center">
                <h1 class="mb-4"><?=$question['name']?></h1>
                <?php
                $form = ActiveForm::begin([
                    'id' => 'poll-form',
                ]);
                if (!empty($answer))
                    foreach ($answer as $value) { ?>
                        <div class="inputGroup">
                            <input id="option_<?=$value['id']?>" name="data_answer" value="<?=$value['id']?>" type="radio" hidden/>
                            <label for="option_<?=$value['id']?>"><?=$value['name']?></label>
                        </div>
                    <?php } ?>
                <div class="form-group text-center mt-4">
                    <input name="type_poll" value="<?=$question['type']?>" hidden>
                    <input name="question_id" value="<?=$question['id']?>" hidden>
                    <?= Html::submitButton('Ответить', ['class' => 'submit-poll-btm', 'name' => 'answer', 'value' => 1]) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>