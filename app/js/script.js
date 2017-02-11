jQuery(document).ready(function(){
   $(".burger").click(function () {
       $(this).toggleClass("menu-on");
       $('ul#menu-verhnee-menyu').toggleClass("menu-on");
    });
});