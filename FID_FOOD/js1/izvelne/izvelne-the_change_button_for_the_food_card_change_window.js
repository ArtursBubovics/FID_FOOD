$(document).ready(function () {
    var divNumber;

    $(".black_over_screen-100_percent").hide();
    $(".izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change-btn").click(function () {

        $(".black_over_screen-100_percent").show();

        divNumber = $(this).closest(".izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card"); //allows you to select the closest parent element that matches the given selector

    }) 
    
    $('.card_replacement_btn').on('click', function () {

        var popupDivNumber = $(this).closest('.card-popup-div'); //allows you to select the closest parent element that matches the given selector


        $(divNumber).children('.izvelne-menu-menu_cards-card-header-h3_dish').html($(popupDivNumber).children('.p-font_size_22px').text()); //change header

        $(divNumber).children('.izvelne-menu-menu_cards-card-img').attr('src', $(popupDivNumber).children('.cursor_pointer').attr('src'))
    });

    $("#delete_btn_for_food_cards_window").click(function () {
        $(".black_over_screen-100_percent").hide();
    })
})