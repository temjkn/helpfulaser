<?php 
    $addCSS="css/comment.css";
    $addParcellingActive="Отзывы";
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
            <div class="comment_header">
                    <h2>Отзывы</h2>
                </div>
<div class="comment">
                    <p>Все очень быстро и точно!!! Молодцы!!!</p>
                    <p><span class="name_comment">Корлан</span>, <span class="data_comment">2018-10-10</span></p>
                </div>
<div class="comment">
                    <p>Все очень быстро и точно!!! Молодцы!!!</p>
                    <p><span class="name_comment">Корлан</span>, <span class="data_comment">2018-10-10</span></p>
                </div>
<div class="comment">
                    <p>Все очень быстро и точно!!! Молодцы!!!</p>
                    <p><span class="name_comment">Корлан</span>, <span class="data_comment">2018-10-10</span></p>
                </div>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>



