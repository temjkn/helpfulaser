<?php require "tpl/header.php" ?>
<?php require "db.php" ?>
<?php $product = get_product_by_id($_GET['id']); ?>   
<link rel="stylesheet" type="text/css" href="css/product_page.css" />  
<div class="parcelling">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li class="active"><a href="#"><?php echo $product ["id_category"];?></a></li>
            </ul>
        </div>
    <div class="frame">
    <div class="margin" id="content_touch">
        <?php require "tpl/menu.php" ?>
        
        <div class="content" id="content">
                <div class="review_flex">
                <div class="slider box">
                    <input type="radio" name="slide_switch" id="id1"/>
                    <label for="id1">
                        <img src=<?php echo $product ["image"];?> width="100"/>
                    </label>
                    <img src=<?php echo $product ["image"];?>/>

                    <!--Lets show the second image by default on page load-->
                    <input type="radio" name="slide_switch" id="id2" checked="checked"/>
                    <label for="id2">
                        <img src=<?php echo $product ["slider_image1"];?> width="100"/>
                    </label>
                    <img src=<?php echo $product ["slider_image1"];?>/>

                    <input type="radio" name="slide_switch" id="id3"/>
                    <label for="id3">
                        <img src=<?php echo $product ["slider_image2"];?> width="100"/>
                    </label>
                    <img src=<?php echo $product ["slider_image2"];?>/>

                    <input type="radio" name="slide_switch" id="id4"/>
                    <label for="id4">
                        <img src=<?php echo $product ["slider_image3"];?> width="100"/>
                    </label>
                    <img src=<?php echo $product ["slider_image3"];?>/>
                </div>
                <div class="short_review line_bottom box">
                <p class="subtitle"><?php echo $product ["id_category"];?></p><br>
                <p class="title"><?php echo $product ["name"];?></p>
                <ul class="stars">
                    <li><i class=" fa fa-star"></i></li>
                    <li><i class=" fa fa-star"></i></li>
                    <li><i class=" fa fa-star"></i></li>
                    <li><i class=" fa fa-star"></i></li>
                    <li><i class=" fa fa-star"></i></li>
                </ul>
                <p class="id_category"><?php echo $product ["small_description"];?></p><br>
                <p class="price"><?php echo $product ["price"];?> P</p>
                <button id="request">Заказать</button>
                </div>
                </div>
                <div class="line_bottom">
                <ul>
                        <li><a class="active" href="#">ОПИСАНИЕ</a></li>
                        <li><a href="#">ОТЗЫВЫ</a></li>
                    </ul>
                </div>
                <div class="description line_bottom">
                <?php echo $product ["description"];?>

            <?php require "tpl/advantages.php" ?>
        
        </div>
            <div id="shadow">
                        <div class="request"> 
                            <div><a id="close_wind"><i class=" fa fa-close"></i></a></div>
                        <div class="form_request">
                            <h3>ОТПРАВИТЬ ЗАЯВКУ</h3>
                            <p>Заполните данные и нам менеджер связется с вами в ближайшее время</p>
                            <form>
                                <input placeholder="Введите ваше имя" name="name">
                                <input placeholder="Введите ваш E-mail" name="mail">
                                <input placeholder="Введите ваш телефон" name="phone">
                                <input placeholder="Введите ваше город" name="city">
                                <button id="sent">Отправить заявку</button>
                            </form>
                        </div>
                    </div>
                    </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>

