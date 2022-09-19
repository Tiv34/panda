<?php

/** @var yii\web\View $this */

use aneeshikmat\yii2\Yii2TimerCountDown\Yii2TimerCountDown;

$this->title = 'Invite party';
?>
<div class="site-index">
    <div class="cover">
        <img class="cover-img-photo" src="img/img.png">
    </div>
    <div class="timer-block">
        <div id="time-down-counter"></div>
        <?php
        echo Yii2TimerCountDown::widget([
            'countDownOver' => 'Да начнётся пир!',
            'countDownDate' => 1692057601 * 1000,
        ]);
        ?>
    </div>
</div>

