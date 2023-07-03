<?php
//$this->registerJsFile('@web/js/carousel.js');
use yii\bootstrap5\Html;

$this->registerCssFile('@web/css/wish-list.css');
?>

<div class="row wish-list align-items-center bg-light">
    <div class="col">
        <h1 class="text-center mt-4">Wish List*</h1>
        <h4>Инструкции пользования</h4>
        <p>Пункты виш-листа делятся на 2 типа: </p>
        <ul>
            <li>Одиночный. Выбранный подарок фиксируется за вами</li>
            <li>Коллективный. Выбранный подарок фиксируется за вами. Реализуется совместными усилиями</li>
        </ul>
        <p>При выборе подарка с несколькими участниками вам покажется ваш компаньон. Вы можете кликнуть на компаньона и
            перейти с ним в чат WatsApp, где обсудите все детали реализации</p>
        <p>Если компаньон так и не появился - просто подождите. Возможно он уже сейчас на сайте выбирает подарок
            имениннице. :)</p>
        <p>Учтите каждый пункт виш-листа имеет максимальное количество компаньонов. После того как наберётся
            максимальное
            количество - данный пункт закрывается для всех гостей. Это не означает, что требуется дождаться
            всех компаньонов. Вы можете начать реализацию уже сейчас. Некоторые пункты требуют своевременной
            подготовки.</p>
        <p>* Wish-list полностью согласован именинницей.</p>
        <p>** Администратор сайта отвечает за конфендициальность ваших выборов. Имениннице доступ к данному разделу
            ограничен.</p>
    </div>
    <div class="wish-list">
        <table class="table">
            <thead class="thead-dark text-center">
            <tr class="text-start">
                <th scope="col">Подарок</th>
                <th scope="col">Бронирую</th>
                <th class="text-center" scope="col">Забронирован</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr class="table-success">
                <td class="text-start">Цветы Цветы Цветы Цветы</td>
                <td class="text-start">
                    1 из 1
                </td>
                <td>
                    <div class="d-flex justify-content-center flex-wrap">
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Лёва</h6>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-start">БраслетБраслет Браслет</td>
                <td class="text-start">
                    0 из 3
                    <div class="inputGroup">
                        <input id="radio_option2" name="radio_option" type="radio" hidden/>
                        <label for="radio_option2"></label>
                    </div>
                </td>
                <td>-</td>
            </tr>
            <tr>
                <td class="text-start">Духи Духи</td>
                <td class="text-start">
                    0 из 1
                    <div class="inputGroup">
                        <input id="radio_option3" name="radio_option" type="radio" hidden/>
                        <label for="radio_option3"></label>
                    </div>
                </td>
                <td>-</td>
            </tr>
            <tr class="table-success">
                <td class="text-start">Мерседес</td>
                <td class="text-start">5 из 5</td>
                <td>
                    <div class="d-flex justify-content-center flex-wrap">
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Лёва</h6>
                            </div>
                        </div>
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Лёва</h6>
                            </div>
                        </div>
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Лёва</h6>
                            </div>
                        </div>
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Лёва</h6>
                            </div>
                        </div>
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Длииииииинное Имяяяяяяя</h6>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-start">Лыжи</td>
                <td class="text-start">
                    1 из 2
                    <div class="inputGroup">
                        <input id="radio_option4" name="radio_option" type="radio" hidden/>
                        <label for="radio_option4"></label>
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-center flex-wrap">
                        <div class="block-guest">
                            <a href="https://wa.me/79263754623?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%A5%D0%BE%D1%87%D1%83%20%D0%BE%D0%B1%D1%81%D1%83%D0%B4%D0%B8%D1%82%D1%8C%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA..."
                               target="_blank">
                                <img class="round-guest" src="<?= '/img/guest/icon' . rand(1, 8) . '.jpg' ?>">
                            </a>
                            <div class="mt-1">
                                <h6 class="text-center">Лёва</h6>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="text-center mt-4 mb-4">
            <?= Html::submitButton('Выбрать', ['class' => 'submit-wish-btm', 'name' => 'wish-list-button']) ?>
        </div>
    </div>
</div>
