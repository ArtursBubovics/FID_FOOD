$(document).ready(function () {
    $('.izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter').click(function() {
        var group = $(this);
        group.toggleClass('active');
        var btn = group.find('.izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter-btn_div-btn'); //ищем кнопку внутри этой группы с помощью метода find
        btn.toggleClass('active', group.hasClass('active')); // _1_ , _2_ проверяется есть ли у этой кнопки уже class actives, если нету добавляет, если есть, убиратет
      });
})