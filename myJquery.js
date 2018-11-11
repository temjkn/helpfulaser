$('.menu_catalog').click(function(){
    $.ajax({  
                    url: "pages/catalog.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                }); 
     $('#content').load('pages/catalog.html');
    $('link:last').attr('href','css/catalog.css');
    $('.active').html('Каталог');
    window.history.pushState( null, null,'#catalog' );
});

$('.menu_about_as').click(function(){
    $.ajax({  
                    url: "pages/about_as.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                }); 
     $('#content').load('pages/about_as.html');
    $('link:last').attr('href', 'css/about_as.css');
    $('.active').html('О компании');
});

$('.menu_comment').click(function(){
    $.ajax({  
                    url: "pages/comment.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                }); 
     $('#content').load('pages/comment.html');
    $('link:last').attr('href', 'css/comment.css');
    $('.active').html('Отзывы');
});

$('.menu_contacts').click(function(){
    $.ajax({  
                    url: "pages/contacts.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                }); 
     $('#content').load('pages/contacts.html');
    $('link:last').attr('href', 'css/contacts.css');
    $('.active').html('Контакты');
});

$('.menu_lamps').click(function(){
    $.ajax({  
                    url: "pages/products/laser.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                }); 
     $('#content').load('pages/products/laser.html');
    $('link:last').attr('href', 'css/product.css');
    $(".active").remove();
    $(".parcelling ul li").remove();
    $(".parcelling ul").append('<li><a href="#">Главная</a></li>');
    $(".parcelling ul").append('<li><a href="#">Каталог</a></li>');
    $(".parcelling ul").append('<li class="active">Лампы и линзы</li>');
});

/*function click_menu(url, css,name,sub_name){
    console.log(25);
    $.ajax({  
                    url: "pages/products/"+url,  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                }); 
    $('#content').load('pages/products/'+url);
    $('link:last').attr('href', 'css/'+css);
    $(".active").remove();
    $(".parcelling ul li").remove();
    $(".parcelling ul").append('<li><a href="#">Главная</a></li>');
    if(sub_name!==undefined){
        $(".parcelling ul").append('<li><a href="#">'+sub_name+'</a></li>')
    }
    $(".parcelling ul").append('<li class="active">'+name+'</li>');
    window.history.pushState( null, null,'catalog' );
}*/