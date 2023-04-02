<?php

/** @var yii\web\View $this */
/** @var $model */

/** @var $user */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'День рождения';
?>
<div class="site-index">
    <div class="slideDown mb-5">
        <div class="row bg-secondary-fitten pt-5 pb-5 text-white">
            <div class="hello-block">
                <h1>
                    Привет
                    <?= $user->name ?>!
                </h1>
            </div>
        </div>
        <div class="row bg-secondary-fitten text-white pb-5 timer-block">
            <script src="/js/timer.js"></script>
        </div>
    </div>
    <div class="row p-5 about-block">
<!--        <div class="back-block"></div>-->
<!--        <div class="image"></div>-->
        <div class="text">
            <div>
                <h1>Обо мне</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae gravida purus. Ut quis elit magna. Fusce et mattis sapien. Sed venenatis magna ut ligula facilisis, eget vulputate neque aliquet. Nulla lacinia condimentum leo non aliquet. Integer
                et enim dapibus, tempor ipsum non, fringilla enim. Cras semper fermentum dolor, at pharetra dolor ornare sit amet. Morbi eu dictum orci, tincidunt pretium nisi. Sed finibus vulputate eleifend. Nulla ac leo facilisis, fermentum tellus in, feugiat
                risus. Curabitur in sem luctus, pellentesque justo nec, aliquet velit. Nam euismod est sit amet ultrices consequat.
            </div>
        </div>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <h1 class="text-center">Мое окружение: «Давайте знакомиться»</h1>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center">
                <?php
                $guest_party = [
                    1 => ['Александрова Анастасия', 'Упрамая зебра'],
                    2 => ['Александров Лев', 'Хитрый львёнок'],
                    3 => ['Иванов Иван', 'Зажигательный носорог'],
                    4 => ['Радионов Евгений', 'Крутой леопард'],
                    5 => ['Степанов Степан', 'Терпеливый слоник'],
                    6 => ['Булкин Рома', 'Неносытный жираф'],
                    7 => ['Зверева Татьяна', 'Весёлая антилопа'],
                    8 => ['Павлова Алина', 'Жизнирадующая обезьянка'],
                    9 => ['Кукушкина Света', 'Удивлённый крокодильчик'],
                ];
                for ($i = 1; $i < 9; $i++) { ?>
                    <div class="block-guest">
                        <img class="round-guest" src="/img/icon<?= $i ?>.jpg">
                        <div class="mt-3">
                            <h4 class="text-center"><?= $guest_party[$i][0] ?></h4>
                            <p class="text-center"><?= $guest_party[$i][1] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Поздравления</h1>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <?php echo $this->render('gallery', ['mini' => true]); ?>
    </div>
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Форма заявки на посещение юбилея</h1>
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success">
                Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
            </div>
        <?php else: ?>
            <div class="contact_form_info">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'name') ?>
                        <?= $form->field($model, 'phone') ?>
                        <?= $form->field($model, 'email') ?>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-dark', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <h1 class="text-center">Гарантированная предоплатв</h1>
    </div>
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Wish List</h1>
        <div class="row">
            <div class="col wish-list">
                <table class="table">
                    <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">Подарок</th>
                        <th scope="col">Забронирован гостем</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr class="table-success">
                        <td>Цветы</td>
                        <td>Да</td>
                    </tr>
                    <tr>
                        <td>Браслет</td>
                        <td>Нет</td>
                    </tr>
                    <tr>
                        <td>Духи</td>
                        <td>Нет</td>
                    </tr>
                    <tr class="table-success">
                        <td>Мерседес</td>
                        <td>Да</td>
                    </tr>
                    <tr class="table-success">
                        <td>Поездка в швейцарию на лыжи</td>
                        <td>Да</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary-fitten">
        <h1 class="text-center">Оплата подарка</h1>
    </div>
</div>

