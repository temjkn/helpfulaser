<?php 
    $addCSS="css/product.css";
    $addParcellingActive="Лазеры ";
    require "tpl/header.php" 
;?>

<div class="parcelling">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li class="active"><a href="#"><?php echo $addParcellingActive ?></a></li>
            </ul>
        </div>
<div class="frame">
    <div class="margin" id="content_touch">
        <?php require "tpl/menu.php" ?>
        
        <div class="content" id="content">
            <div class="porduct">
                <h2><?php echo $addParcellingActive ?></h2>

                <?php require "db.php"; ?>

                <?php
                    $lasers= get_lasers_all();
                    foreach($lasers as $laser): ?>

                <div class="product_card">
                        <img src=<?php echo $laser ["image"];?>>
                        <p class="name_product"><?php echo $laser ["name"];?></p>
                        <p class="price_product"><?php echo $laser ["price"];?> Р</p>
                        <div>
                            <a href=product.php?id=<?php echo $laser ["id"];?>><button>Подробнее</button></a>
                            <ul>
                                <li class="favorite"><i class="fa fa-heart-o"></i></li>
                                <li class="availability"><i class="fa fa-signal"></i></li>
                            </ul> 
                        </div>
                    </div>

                <?php endforeach; ?>

                <div class="line_bottom">КУПИТЬ ЛАЗЕР ДЛЯ УДАЛЕНИЯ ТАТУ</div>                
                <p>У нас Вы можете купить лазеры для удаления тату, эллос эпилятор и косметологический лазер Lasertech.</p>
                <p>Простые в использовании, надежные в работе, с быстрой окупаемостью. Необходимая вещь для любого салона красоты.</p>
                <p class="fatty">Доставка по всей России и СНГ!</p>
                <p> Звоните:<span class="fatty">+7 (800) 222-59-10</span></p>
            </div>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>