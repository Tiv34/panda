<?php

/** @var yii\web\View $this */
/** @var $models */
/** @var $pages */
/** @var $user */

use yii\bootstrap5\LinkPager;
use yii\helpers\Html;


$this->title = 'День рождения';
?>
<div class="site-index">
    <div class="slideDown mb-5">
        <div class="row bg-secondary-fitten pt-5 pb-4 text-white">
            <div class="hello-block">
                <h1>
                    Привет
                    <?= $user->name ?>!
                </h1>
<!--                <h1>До праздника осталось:</h1>-->
            </div>
        </div>

        <div class="row bg-secondary-fitten text-white pb-5 timer-block">
            <hr class="style-volna2">
            <script src="/js/timer.js"></script>
        </div>
    </div>
    <div class="row about-block">
        <div class="col my-auto">
            <div class="image mx-auto">
                <div class="img-shadow"></div>
                <div class="img-block"><img class="" src="/img/title_vogue.jpg"></div>
            </div>
        </div>
        <div class="text col my-auto">
            <h1 class="mb-4">Обо мне</h1>
            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae gravida purus. Ut quis elit
                magna. Fusce et mattis sapien. Sed venenatis magna ut ligula facilisis, eget vulputate neque aliquet.
                Nulla lacinia condimentum leo non aliquet. Integer
                et enim dapibus, tempor ipsum non, fringilla enim. Cras semper fermentum dolor, at pharetra dolor ornare
                sit amet. Morbi eu dictum orci, tincidunt pretium nisi. Sed finibus vulputate eleifend. Nulla ac leo
                facilisis, fermentum tellus in, feugiat
                risus. Curabitur in sem luctus, pellentesque justo nec, aliquet velit. Nam euismod est sit amet ultrices
                consequat.</p>
            <div class="img-shadow-2"></div>
        </div>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <h1 class="text-center">Мое окружение: «Давайте знакомиться»</h1>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center">
                <?php
                foreach ($models as $model) { ?>
                    <div class="block-guest">
                        <img class="round-guest" src="<?=$model->img?>">
                        <div class="mt-3">
                            <h4 class="text-center"><?= $model->name ?></h4>
                        </div>
                    </div>
                <?php } ?>
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
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Поздравления</h1>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <?php echo $this->render('gallery', ['mini' => true]); ?>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <h1 class="text-center">Гарантированная предоплатв</h1>
    </div>
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Wish List</h1>
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
        </div>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <h1 class="text-center">Оплата подарка</h1>
    </div>
</div>

