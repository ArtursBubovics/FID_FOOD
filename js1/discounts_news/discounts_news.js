$(document).ready(function () {
  $('#dicounts').show();
  $('#news').hide();
  $('#discounts_btn').on('click', function () {
    $('#dicounts').show();
    $('#news').hide();
    $('#news_btn').css('width','');
    $('#discounts_btn').css('width','100%');
    $.cookie('discount','discount_show', { expires: 30 });
    $.cookie('discount_active', 'discount_is_active', { expires: 30 });
  })

  $('#news_btn').on('click', function () {
    $('#dicounts').hide();
    $('#news').show();
    $('#discounts_btn').css('width','');
    $('#news_btn').css('width','100%');
    $.cookie('news', 'news_show', { expires: 30 })
    $.cookie('news_active', 'news_is_active', { expires: 30 });
  })
})