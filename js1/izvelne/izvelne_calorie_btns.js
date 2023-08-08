$(document).ready(function () {


    $('.izvelne-btns_calories-container-calories').click(function () {
        var pressBtn = $(this);
        var btn_text = pressBtn.find('.izvelne-menu-p'); //ищем кнопку внутри этой группы с помощью метода find  


        if ($(pressBtn.hasClass('izvelne-btns_calories-container-calories-selected'))) {
            $('.izvelne-btns_calories-container-calories').removeClass('izvelne-btns_calories-container-calories-selected');
            $('.izvelne-menu-p').removeClass('izvelne-menu-p-selected');
            pressBtn.addClass('izvelne-btns_calories-container-calories-selected');
            btn_text.addClass('izvelne-menu-p-selected');
            var myText = $('.izvelne-btns_calories-container-calories').find('.izvelne-menu-p-selected').html();
            $('#calorie_count').html(myText);
        }
    })
})