<?php

use app\assets\PollAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

PollAsset::register($this);

$this->registerJsFile('@web/js/poll/end.js');
$this->registerCssFile('@web/css/poll/end.css');
?>
<script src="https://unpkg.com/@mojs/core"></script>
<script src="https://cdn.jsdelivr.net/npm/@mojs/player"></script>

<?php $form = ActiveForm::begin([
    'id' => 'poll-repeat',
]); ?>
<div class="submit-repeat hidden">
    <input name="repeat" value="1" hidden>
    <?= Html::submitButton('Пройти опрос повторно', ['class' => 'submit-repeat-btm', 'name' => 'repeat-poll-button']) ?>
</div>
<?php ActiveForm::end(); ?>

