$(document).ready(function() {
    var sum = 0;
    $('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container').find('.calorie_count').each(function() {
        var num = parseFloat($(this).text());
        sum += num;
    });
    $("#return_cal").text(sum.toFixed(1));

    sum = 0;
    $('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container').find('.protein_count').each(function() {
        var num = parseFloat($(this).text());
        sum += num;
    });
    $("#return_proteins").text(sum.toFixed(1));

    sum = 0;
    $('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container').find('.amount_of_fat').each(function() {
        var num = parseFloat($(this).text());
        sum += num;
    });
    $("#return_fats").text(sum.toFixed(1));

    sum = 0;
    $('.izvelne-container-body-container-menu-container-menu-container-menu_cards-container').find('.carbohydrate_count').each(function() {
        var num = parseFloat($(this).text());
        sum += num;
    });
    $("#return_carbohydrates").text(sum.toFixed(1));
})