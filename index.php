<?php 
    $addCSS="css/catalog.css";
;?>
<?php require "tpl/header.php" ?>
   
<div class="frame">
    <div class="margin" id="content_touch">
        <?php require "tpl/menu.php" ?>
        
        <div class="content" id="content">
            
        <?php require "slider/index_slider.php" ?> 
            
        <?php require "tpl/catalog_card.php" ?>
            
        <div class="line_bottom">
            <h4>ПОЧЕМУ ВЫГОДНЕЕ КУПИТЬ ЛАЗЕР ДЛЯ УДАЛЕНИЯ ТАТУ У НАС?</h4>
        </div>    
        <div class="line_bottom">
                    <p>Компания helpfulaser аботает на российском рынке с 2007 года. Компания занимается комплексными поставками лазерного оборудования для салонов красоты и тату-салонов. Наша компания на этом рынке по всей территории России, часто у нас заказывают товар из Украины, Белоруссии и других стран ближнего зарубежья. мы занимаемся как розночной, так и оптовой поставкой необходимых товаров.</p>    
        <?php require "tpl/advantages.php" ?>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>