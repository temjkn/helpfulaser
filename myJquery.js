// function click_menu(name_button){ //меняем содержимое контента
//    var url_adress= '';
//    var css= '';
//    var name= '';
//    var sub_name= '';
//    if (name_button==='catalog'){
//        var url_adress='pages/catalog.html';
//        var css= 'catalog.css';
//        var name= 'Каталог';
//    };
//    if (name_button==='about_as'){
//        var url_adress='pages/about_as.php';
//        var css= 'about_as.css';
//        var name= 'О компании';
//    };
//    if (name_button==='comment'){
//        var url_adress='pages/comment.html';
//        var css= 'comment.css';
//        var name= 'Отзывы';
//    };
//    if (name_button==='contacts'){
//        var url_adress='pages/contacts.html';
//        var css= 'contacts.css';
//        var name= 'Контакты';
//    };
//    if (name_button==='laser'){
//        var url_adress='pages/products/laser.php';
//        var css= 'product.css';
//        var sub_name= 'Каталог';
//        var name='Лампы и линзы';
//    };
//    if (name_button==='product_button'){
//        var url_adress='product.php';
//        var css= 'product_page.css';
//        var sub_name= 'Каталог';
//        var name='Лампы и линзы';
//    };
//    $('#content').load(url_adress);
//    $('link:last').attr('href', 'css/'+css);
//    $('.active').html(name);
//    $.ajax({  
//                    url: "pages/products/"+url_adress,  
//                    cache: false,  
//                    success: function(html){  
//                        $("#content").html(html);  
//                    }  
//                }); 
//    $(".active").remove();
//    $(".parcelling ul li").remove();
//    $(".parcelling ul").append('<li><a href="#">Главная</a></li>');
//    if(sub_name!==undefined){
//        $(".parcelling ul").append('<li><a>'+sub_name+'</a></li>')
//    }
//    $(".parcelling ul").append('<li class="active">'+name+'</li>');
//    /*window.history.pushState( null, null,'catalog' );*/
//}
