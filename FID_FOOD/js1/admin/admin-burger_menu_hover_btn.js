$(document).ready(function () {
    $('#admin-burger_menu_hover_btn_FOODS_btns').hide();
    $('#admin-burger_menu_hover_btn_DISCOUNTS-NEWS_btns').hide();

    $('#admin-burger_menu_hover_btn_FOODS').hover(
        function () {
            $('#admin-burger_menu_hover_btn_DISCOUNTS-NEWS_btns').hide();
            $('#admin-burger_menu_hover_btn_FOODS_btns').show();
        },
        function () {
            $('#admin-burger_menu_hover_btn_FOODS_btns').hide();
        }
    )

    $('#admin-burger_menu_hover_btn_DISCOUNTS-NEWS').hover(
        function () {
            $('#admin-burger_menu_hover_btn_FOODS_btns').hide();
            $('#admin-burger_menu_hover_btn_DISCOUNTS-NEWS_btns').show();
        },
        function () {
            $('#admin-burger_menu_hover_btn_DISCOUNTS-NEWS_btns').hide();
        }
    )


})