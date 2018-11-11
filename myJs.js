var menu_top= document.getElementById('menu_top');/*скрывает верхнее меню*/

menu_see.onclick=function(){
            if(menu_top.classList.contains("see_menu")){
                menu_top.classList.remove("see_menu");          
            }else{
                menu_top.classList.add("see_menu");
            }
}

var initialPoint;
var finalPoint;
    content_touch.addEventListener('touchstart', function(event) {
    //event.preventDefault();
    event.stopPropagation();
    initialPoint=event.changedTouches[0];
    }, false);
        content_touch.addEventListener('touchend', function(event) {
        //event.preventDefault();
        event.stopPropagation();
        finalPoint=event.changedTouches[0];
        var xAbs = Math.abs(initialPoint.pageX - finalPoint.pageX);
        var yAbs = Math.abs(initialPoint.pageY - finalPoint.pageY);
        if (xAbs > 80 || yAbs > 80) {
        if (xAbs > yAbs) {
        if (finalPoint.pageX < initialPoint.pageX){
            accordion.classList.remove("slide_830");
            /*СВАЙП ВЛЕВО*/}
        else{
                accordion.classList.add("slide_830");
        /*СВАЙП ВПРАВО*/}
        }
    }
}, false);

 menu_accordion.onclick=function(){
            if(accordion.classList.contains("slide_830")){
                accordion.classList.remove("slide_830");          
            }else{
                accordion.classList.add("slide_830");
            }
};
