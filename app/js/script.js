jQuery(document).ready(function(){
   $(".burger").click(function () {
       $(this).toggleClass("menu-on");
       $('.header__navigation').toggleClass("menu-on"); 
    });

    $('main a[href^="#"], main a[href^="."]').click(function() {
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({
                scrollTop: $(scroll_el).offset().top-0
            }, 1200);
        }
        return false;
    });

    $("#form").submit(function () { //устанавливаем событие отправки для формы с id=form

        var form_data = $(this).serialize(), //собераем все данные из формы

            form = $(this);

        $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
        })
            .done(function(e) {
                console.log(e);

                form.find('.form-wrap').hide();
                form.find('p.alert').append("Спасибо за обращение<br>мы перезвоним вам в ближайшее время");

            })
            .fail(function(e) {
                console.log( e );
            })

        return false;

    });

    $("#form-2").submit(function () { //устанавливаем событие отправки для формы с id=form

        var form_data = $(this).serialize(), //собераем все данные из формы

            form = $(this);

        $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
        })
            .done(function(e) {
                console.log(e);

                form.find('.form-wrap').hide();
                form.find('p.alert').append("Спасибо за обращение<br>мы перезвоним вам в ближайшее время");

            })
            .fail(function(e) {
                console.log( e );
            })

        return false;

    });
});