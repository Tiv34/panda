<?php

/** @var yii\web\View $this */
/** @var $models */
/** @var $pages */

/** @var $user */

use yii\bootstrap5\Html;
use yii\bootstrap5\LinkPager;

$this->title = 'День рождения';
$this->registerJsFile('@web/js/scroll.js');
$this->registerJsFile('@web/js/popup.js');
$this->registerCssFile('@web/css/popup.css');

?>

<div class="site-index">
    <div class="slideDown mb-5">
        <div class="row bg-secondary-fitten pt-5 pb-4 text-white">
            <div class="hello-block">
                <div class="hello-block-flex">
                    <img id="champagne" src="/img/cheers.png">
                    <h1 class="title-name-hello">
                        Привет,
                        <?= $user->site_name ?>!
                    </h1>
                    <img id="champagne" src="/img/champagne.png">
                </div>
                <h2 class="gradient-all">До <strong>15</strong> августа осталось</h2>
            </div>
        </div>

        <div class="row bg-secondary-fitten text-white pb-5 timer-block">
            <hr class="style-volna2">
            <script src="/js/timer.js"></script>
        </div>
    </div>
    <?php echo $this->render('about'); ?>
    <div class="row text-center pt-5 pb-5 text-white bg-secondary-fitten guest-block" id="guest-block">
        <h1 class="text-center">Мое окружение: «Давайте знакомиться»</h1>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center">
                <?php
                foreach ($models as $model) { ?>
                <a class="myLinkModal" data-id-guest="<?= $model->id?>" href="#">
                    <div class="block-guest">
                        <img class="round-guest" src="<?= $model->img ?>">
                        <div class="mt-3">
                            <h4 class="text-center"><?= $model->name ?></h4>
                        </div>
                    </div>
                </a>
                <div class="myModal" data-id="<?=$model->id?>">
                    <img class="round-guest big-img mb-2" src="<?= $model->img ?>">
                    <h4 class="text-center"><?= $model->name ?></h4>
                    <p><?= $model->description ?></p>
                    <svg class="myModal__close close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="#fff">
                        <path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"></path>
                    </svg>
                </div>
                <?php } ?>
                <div class="myOverlay"></div>
            </div>
            <div>
                <?php
                echo LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
            </div>
        </div>
    </div>
    <!--    <div class="row  pt-5 pb-5 bg-light">-->
    <!--        <h1 class="text-center">Поздравления</h1>-->
    <!--    </div>-->
    <div class="row  pt-5 pb-5 bg-secondary-fitten bg-light">
        <?php echo $this->render('gallery', ['mini' => true]); ?>
        <div class="text-center mt-4">
            <a class="submit-btm" href="/web/site/gallery">Посмотреть больше</a>
        </div>
    </div>
    <!--    <div class="row  pt-5 pb-5 bg-light">-->
    <!--        <h1 class="text-center">Wish List</h1>-->
    <!--        <div class="row">-->
    <!--            <div class="col wish-list">-->
    <!--                <table class="table">-->
    <!--                    <thead class="thead-dark text-center">-->
    <!--                    <tr>-->
    <!--                        <th scope="col">Подарок</th>-->
    <!--                        <th scope="col">Забронирован гостем</th>-->
    <!--                    </tr>-->
    <!--                    </thead>-->
    <!--                    <tbody class="text-center">-->
    <!--                    <tr class="table-success">-->
    <!--                        <td>Цветы</td>-->
    <!--                        <td>Да</td>-->
    <!--                    </tr>-->
    <!--                    <tr>-->
    <!--                        <td>Браслет</td>-->
    <!--                        <td>Нет</td>-->
    <!--                    </tr>-->
    <!--                    <tr>-->
    <!--                        <td>Духи</td>-->
    <!--                        <td>Нет</td>-->
    <!--                    </tr>-->
    <!--                    <tr class="table-success">-->
    <!--                        <td>Мерседес</td>-->
    <!--                        <td>Да</td>-->
    <!--                    </tr>-->
    <!--                    <tr class="table-success">-->
    <!--                        <td>Поездка в швейцарию на лыжи</td>-->
    <!--                        <td>Да</td>-->
    <!--                    </tr>-->
    <!--                    </tbody>-->
    <!--                </table>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</div>

