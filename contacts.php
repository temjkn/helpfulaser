<?php 
    $addCSS="css/contacts.css";
    $addParcellingActive="Контакты";
    require "tpl/header.php" 
;?>

<div class="parcelling">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li class="active"><a href="#"><?php echo $addParcellingActive ?></a></li>
            </ul>
        </div>
<div class="frame">
    <div class="margin" id="content_touch">
        <?php require "tpl/menu.php" ?>
        
        <div class="content" id="content">
            <div class="contacts">
                    <h2>КОНТАКТЫ</h2>
                    <table>
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td>Офис: <span class="contact_black">117218, Москва, Дмитрия Ульянова,38</span></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td>Телефон: <span class="contact_black">8 (800) 222-59-10</span></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-credit-card"></i></td>
                        <td>Способы оплаты: <span class="contact_black">электронные деньги, безналичный расчет</span></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-clock-o"></i></td>
                        <td>Режим работы: <span class="contact_black">Пн-Пт 11.00-19.00 и Сб 11.00-17.00</span></td>
                    </tr>
                </table>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4fea421d5fc755e9df442aa7964429b9bc202032c691b5338ac30caf02a2a30e&amp;width=700&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>