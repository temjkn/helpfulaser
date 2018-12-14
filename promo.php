<?php 
    $addCSS="css/promo.css";
    $addParcellingActive="Акции";
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
            <div class="line_bottom">
                <h2>АКЦИИ</h2>
                <h4>ПОСТОЯННЫЕ СКИДКИ</h4>
            </div>
            <ul>
                <li>Скидка 3%<br> при покупке 2-х аппаратов(не действует на аппараты по акции)</li>
                <li>Скидка 6%<br> при покупке 3-х аппаратов(не действует на аппараты по акции)</li>
            </ul>
            <div class="line_bottom"><h4>АКЦИИ</h4></div>
            <ul>
                <li>Гель В ПОДАРОК<br> при покупке лазера К-101</li>
                <li>Гель + линза В ПОДАРОК<br> при покупке лазера Н-101</li>
            </ul>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>

