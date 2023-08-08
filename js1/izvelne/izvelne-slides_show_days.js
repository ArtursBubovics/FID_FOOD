$(document).ready(function () {
    $('.slider').slick({
        dots: false,
        infinite: false,
        speed: 2000,
        slidesToShow: 7,
        slidesToScroll: 7,
        prevArrow: $('#left_btn_slide_show_days'),
        nextArrow: $('#right_btn_slide_show_days'),
    }).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        // получаем общее количество слайдов в слайдере
        var totalSlides = slick.slideCount;
        // получаем индекс текущего слайда
        var currentSlideIndex = slick.currentSlide;
        // проверяем, является ли текущий слайд последним

        if (currentSlideIndex == 7) {
            // если да, то делаем кнопку "вперед" светлее
            $('#right_btn_slide_show_days').addClass('menu_calendar-prevSlide_nextSlide');
            $('#right_btn_slide_show_days_img').addClass('izvelne-prevSlide_nextSlide-selected_img');
        } else {
            // если нет, то убираем светлый стиль с кнопки "вперед"
            $('#right_btn_slide_show_days').removeClass('menu_calendar-prevSlide_nextSlide');
            $('#right_btn_slide_show_days_img').removeClass('izvelne-prevSlide_nextSlide-selected_img');
        }
        // проверяем, является ли текущий слайд первым
        if (currentSlideIndex == 0) {
            // если да, то делаем кнопку "назад" темнее
            $('#left_btn_slide_show_days').addClass('menu_calendar-prevSlide_nextSlide');
            $('#left_btn_slide_show_days_img').addClass('izvelne-prevSlide_nextSlide-selected_img');
        } else {
            // если нет, то убираем темный стиль с кнопки "назад"
            $('#left_btn_slide_show_days').removeClass('menu_calendar-prevSlide_nextSlide');
            $('#left_btn_slide_show_days_img').removeClass('izvelne-prevSlide_nextSlide-selected_img')
        }
    });
});