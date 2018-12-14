<?php 
    $addCSS="css/about_as.css";
    $addParcellingActive="О компании";
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
            <div class="company">
                <div class="line_bottom">
                    <h2>О компании</h2>
                    <h4>ПОСТОЯННЫЕ СКИДКИ</h4>
                </div>
                <div class="line_bottom">
                    <p>Компания helpfulaser аботает на российском рынке с 2007 года. Компания занимается комплексными поставками лазерного оборудования для салонов красоты и тату-салонов. Наша компания на этом рынке по всей территории России, часто у нас заказывают товар из Украины, Белоруссии и других стран ближнего зарубежья. мы занимаемся как розночной, так и оптовой поставкой необходимых товаров.</p>

                <?php require "tpl/advantages.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>

