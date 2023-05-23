$(document).ready(function () {
if ($.cookie('news_active') == 'news_is_active') {
    $.removeCookie('news_active');
    $('#discounts_btn').css('width', '');
    $('#news_btn').css('width', '100%');
    $('#newsdicounts').hide();
    $('#news').show();
}
if ($.cookie('news') == 'news_show') {
    $.removeCookie('news');
    $('#dicounts').hide();
    $('#news').show();
}
});
