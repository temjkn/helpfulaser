<?php 
    $addCSS="css/catalog.css";
    $addParcellingActive="Каталог";
    require "tpl/header.php" 
;?>

<div class="parcelling">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li class="active"><?php echo $addParcellingActive ?><a href="#"></a></li>
            </ul>
        </div>
<div class="frame">
    <div class="margin" id="content_touch">
        <?php require "tpl/menu.php" ?>
        
        <div class="content" id="content">
            <div class="catalog_header">
                    <h2>Каталог</h2>
                </div>
            <?php require "tpl/catalog_card.php" ?>
            <div class="line_bottom">
                                КУПИТЬ ЛАЗЕР ДЛЯ УДАЛЕНИЯ ТАТУ
                            </div>                
            <p>У нас Вы можете купить лазеры для удаления тату, эллос эпилятор и косметологический лазер Lasertech.</p>
            <p>Простые в использовании, надежные в работе, с быстрой окупаемостью. Необходимая вещь для любого салона красоты.</p>
            <p class="fatty">Доставка по всей России и СНГ!</p>
            <p>Звоните:<span class="fatty">+7 (800) 222-59-10</span></p>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>




