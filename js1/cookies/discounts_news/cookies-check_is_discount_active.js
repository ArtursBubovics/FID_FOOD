$(document).ready(function () {
    if ($.cookie('discount_active') == 'discount_is_active') {
        $.removeCookie('discount_active');
        $('#news_btn').css('width', '');
        $('#discounts_btn').css('width', '100%');

    }
    if ($.cookie('discount') == 'discount_show') {
        $.removeCookie('discount');
        $('#news').hide();
        $('#dicounts').show();
    }
})