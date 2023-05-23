$(document).ready(function () {
    $('.izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn').click( function(){
            var pressBtn = $(this);
            var btn_text = pressBtn.find('.izvelne-menu-menu_calendar-p'); //ищем кнопку внутри этой группы с помощью метода find
            if($(pressBtn.hasClass('.izvelne-menu_calendar-container-prevSlide_nextSlide-selected'))){
                $('.izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn').removeClass('izvelne-menu_calendar-container-prevSlide_nextSlide-selected');
                $('.izvelne-menu-menu_calendar-p').removeClass('izvelne-menu-p-selected');
                pressBtn.addClass('izvelne-menu_calendar-container-prevSlide_nextSlide-selected');
                btn_text.addClass('izvelne-menu-p-selected');
            }
    })
})