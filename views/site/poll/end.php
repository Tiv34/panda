<?php

use app\assets\PollAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

PollAsset::register($this);

$this->registerJsFile('@web/js/poll/end.js');
$this->registerCssFile('@web/css/poll/end.css');
$this->registerJsFile('@web/js/poll/click.js');
?>
<style>

</style>
<script src="https://unpkg.com/@mojs/core"></script>
<script src="https://cdn.jsdelivr.net/npm/@mojs/player"></script>
<?php $form = ActiveForm::begin([
    'id' => 'poll-repeat',
]); ?>
<div class="block-poll"></div>
<div class="submit-repeat hidden">
    <input name="repeat" value="1" hidden>
    <?= Html::submitButton('Пройти опрос повторно', ['class' => 'submit-poll-btm submit-poll-big-btm', 'name' => 'repeat', 'value'=>1]) ?>
    <p class="text-light text-end-poll">Спасибо за участие в опросе. Следи за новостями на этом сайте.</p>
</div>
<?php ActiveForm::end(); ?>
<div id="pyramid">
    <img src="/img/geometric.png">
</div>
<div id="pyramid_2">
    <img src="/img/geometric.png">
</div>
