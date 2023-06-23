<?php

use app\assets\PollAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

PollAsset::register($this);

$this->registerJsFile('@web/js/poll/mojs/mo.umd.js');
$this->registerJsFile('@web/js/poll/mojs/player.js');
$this->registerJsFile('@web/js/poll/end.js');
$this->registerCssFile('@web/css/poll/end.css');
$this->registerJsFile('@web/js/poll/click.js');
?>
<style>

</style>
<?php $form = ActiveForm::begin([
    'id' => 'poll-repeat',
]); ?>
<div class="block-poll"></div>
<div class="submit-repeat hidden">
    <input name="repeat" value="1" hidden>
    <?= Html::submitButton('Пройти опрос повторно', ['class' => 'submit-poll-btm submit-poll-big-btm', 'name' => 'repeat', 'value'=>1]) ?>
    <p class="text-light text-end-poll">Спасибо за участие в опросе.</p>
    <p class="text-light text-end-poll">Следи за новостями на этом сайте.</p>
    <p class="text-light text-end-poll">Сейчас можешь зайти на Главную и Галерею.</p>
</div>
<?php ActiveForm::end(); ?>
<div id="pyramid">
    <img src="/img/geometric.png">
</div>
<div id="pyramid_2">
    <img src="/img/geometric.png">
</div>
