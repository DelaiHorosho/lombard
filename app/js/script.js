jQuery(document).ready(function(){
   $(".burger").click(function () {
       $(this).toggleClass("menu-on");
       $('.header__navigation').toggleClass("menu-on"); 
    });
});