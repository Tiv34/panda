<?php

/** @var yii\web\View $this */

use aneeshikmat\yii2\Yii2TimerCountDown\Yii2TimerCountDown;

$this->title = 'День рождения';
?>
<div class="site-index">
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Заголовок приглашения</h1>
    </div>
    <div class="row bg-secondary text-white pt-5 pb-5">
        <div class="timer-block">
            <div id="time-down-counter"></div>
            <?php
            echo Yii2TimerCountDown::widget([
                'countDownOver' => 'Да начнётся пир!',
                'countDownDate' => 1692057601 * 1000,
//                'countDownDate' => (time()+5) * 1000,
            ]);
            ?>
        </div>
        <p class="text-center">По окончанию таймера меняется на текст</p>
    </div>
    <div class="row  pt-5 pb-5 bg-light">
        <div class="col-6">
            <h1 class="text-start pr-2 mb-5">Обо мне</h1>
            <p>
                Следует отметить, что новая модель организационной деятельности не оставляет шанса для своевременного
                выполнения сверхзадачи. В целом, конечно, новая модель организационной деятельности позволяет оценить
                значение новых предложений. Повседневная практика показывает, что перспективное планирование
                обеспечивает актуальность новых принципов формирования материально-технической и кадровой базы.
            </p>
            <p>
                Значимость этих проблем настолько очевидна, что перспективное планирование, а также свежий взгляд на
                привычные вещи — безусловно открывает новые горизонты для первоочередных требований. Таким образом,
                глубокий уровень погружения обеспечивает актуальность укрепления моральных ценностей.
            </p>
            <p>
                Картельные сговоры не допускают ситуации, при которой независимые государства ассоциативно распределены
                по отраслям. Являясь всего лишь частью общей картины, элементы политического процесса освещают
                чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, ассоциативно
                распределены по отраслям. Равным образом, граница обучения кадров предоставляет широкие возможности для
                благоприятных перспектив. Для современного мира повышение уровня гражданского сознания требует
                определения и уточнения первоочередных требований. Разнообразный и богатый опыт говорит нам, что начало
                повседневной работы по формированию позиции представляет собой интересный эксперимент проверки
                первоочередных требований.
            </p>
        </div>
        <div class="col-6">
            <div class="position-relative">
                <img class="position-relative" src="/img/title_vogue.jpg">
                <img class="position-absolute" src="/img/photo1.jpg" id="img-3">
                <img class="position-absolute" src="/img/img-3.jpg" id="img-2">
            </div>
        </div>
    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary">
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
                for ($i = 1; $i < 10; $i++) { ?>
                    <div class="block-guest">
                        <img class="round-guest" src="/img/icon<?= $i ?>.jpg">
                        <div class="mt-3">
                            <h4 class="text-center"><?= $guest_party[$i][0] ?></h4>
                            <p class="text-center"><?= $guest_party[$i][1] ?></p>
                        </div>
                    </div>
                <?php }
                for ($i = 1; $i < 10; $i++) { ?>
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
    <div class="row  pt-5 pb-5 text-white bg-secondary">
        <h1 class="text-center">Галерея</h1>
    </div>
    <div class="row  pt-5 pb-5 bg-light">
        <h1 class="text-center">Форма заявки на посещение юбилея</h1>

    </div>
    <div class="row  pt-5 pb-5 text-white bg-secondary">
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
    <div class="row  pt-5 pb-5 text-white bg-secondary">
        <h1 class="text-center">Оплата подарка</h1>
    </div>
</div>

