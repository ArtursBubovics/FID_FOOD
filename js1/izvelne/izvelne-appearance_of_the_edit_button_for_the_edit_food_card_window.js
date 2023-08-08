$(document).ready(function () {
    $('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change').hide();

    $('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card').hover(
        
        //если навелись
        function () {
            $(this).find('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change').show(); // показываем иконку при наведении на блок
        },
        //если не навелись
        function () {
            $(this).find('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change').hide(); // скрываем иконку при уходе курсора с блока
        }
    );
})