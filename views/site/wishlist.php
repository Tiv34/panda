<?php

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/** @var $present */
/** @var $identity */
?>

<div id="wish-list-block">

    <div class="row wish-list align-items-center bg-light">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col mb-3">
            <p class="text-center mt-4">Wish List**</p>
            <p>Как работает?</p>
            <p>Каждый пункт виш-листа учитывает ожидаемое количество компаньонов. Некоторые пункты требуют время на
                организацию его исполнения.</p>
            <p>Пункты делятся на 2 типа:</p>
            <ul>
                <li>Одиночный. Ты или твоя семья даришь подарок от себя.</li>
                <li>Коллективный. Подарок реализуется совместными усилиями.</li>
            </ul>
            <p>При выборе «коллективного» подарка отображается количество участников. После того как пункт наберет всех
                участников, пункт закрывается для дальнейшего выбора.</p>
            <p>Если ты найдешь компаньонов меньшим количеством, то напиши администратору сайта и пункт с подарком будет
                закрыт для выбора.</p>
            <p>Ты можешь кликнуть на компаньона и перейти с ним в чат WatsApp, где обсудите все детали реализации. Если
                компаньон так и не появился - просто подождите. Возможно, он уже сейчас на сайте выбирает подарок
                имениннице. :)</p>
            <p> ** Администратор сайта отвечает за конфиденциальность ваших выборов. <strong>Имениннице доступ к данному разделу ограничен.
                    Она все узнает на празднике!</strong>
            </p>
            <p>Пожелания именинницы:</p>
            <ul>
                <li>Не отмечайте подарок, если думаете подарить часть денег на него – именинница не планирует тратится дополнительно на эти подарки </li>
                <li>При оценке своих финансовых возможностей, учитывайте, пожалуйста:</li>
                <ul>
                    <li>ЦВЕТЫ ДАРИТЬ НЕ НАДО: «я потом не знаю куда ставить и ухаживать за ними надо, и вянут через неделю, независимо от стоимости букета»</li>
                    <li>У Сергея тоже был день рождения и на празднике будет время и его отметить вниманием  Сергей предпочитает только конверты</li>
                </ul>
            </ul>
            <div class="w-100 align-items-center text-center">
                <a class="btn btn-outline-success" href="/web/site/gallery">Свяжись с администратором сайта</a>
            </div>
        </div>
        <div class="wish-list">
            <table class="table">
                <thead class="thead-dark text-center">
                <tr class="text-start">
                    <th style="width: 45%;">Подарок</th>
                    <th class="text-center" style="width: 55%;">Забронирован</th>
                </tr>
                </thead>
                <tbody class="text-center">
                <?php foreach ($present as $value) {
                    $class = count($value->presentUser) === $value->count_pay ? 'table-success' : '';
                    ?>
                    <tr class="<?= $class ?>">
                        <td class="text-start"><a class="text-center"
                                                  style="color: #9f785f;font-weight: 600;text-decoration: revert;"
                                                  target="_blank" href="<?= $value->src ?>"><?= $value->name ?></a></td>
                        <td class="text-start">
                            <div class="row m-0 p-0">
                                <div class="col-10">
                                    <h5 class="text-center"><?= count($value->presentUser) ?>
                                        из <?= $value->count_pay ?></h5>
                                    <div class="d-flex justify-content-center flex-wrap">
                                        <?php foreach ($value->presentUser as $user) { ?>
                                            <div class="block-guest">
                                                <a href="https://wa.me/<?= $user->phone ?>?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                                                   target="_blank">
                                                    <img class="round-guest" src="<?= $user->img ?>">
                                                </a>
                                                <div class="mt-1">
                                                    <p class="text-center"><?= $user->name ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-2 d-flex align-items-center p-0">
                                    <?php if ((count($value->presentUser) !== $value->count_pay) && empty($identity->present_id)) { ?>
                                        <div class="inputGroup">
                                            <input id="radio_option<?= $value->id ?>" name="radio_option" type="radio"
                                                   value="<?= $value->id ?>" hidden/>
                                            <label for="radio_option<?= $value->id ?>"></label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="text-center mt-4 mb-4">
                <?= Html::submitButton('Выбрать', ['class' => 'submit-wish-btm', 'data-dismiss' => 'alert', 'id' => 'wish-list-set', 'name' => 'wish-list-button']) ?>
            </div>
            <div id="loading-animate" class="w-100">
                <img src='/img/loading.svg'/>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>



