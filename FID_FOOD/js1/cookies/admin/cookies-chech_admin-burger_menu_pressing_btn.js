$(document).ready(function () {
    if ($.cookie('admin-burger_btns') == 'allergy-settings-and-preferences') {
        $('#admin-header_main-name').text('ALERĢIJAS IESTATĪJUMI UN PREFERENCES');
    }

    if (($.cookie('admin-burger_btns') == 'ready-food') || (($.cookie('admin-burger_btns') == 'recipes'))) {
        $('#admin-header_main-name').text('ĒDIENI');
        // if ($.cookie('admin-burger_btns') == 'ready-food') {
            
        // }else{

        // }
    }

    if (($.cookie('admin-burger_btns') == 'discounts') || (($.cookie('admin-burger_btns') == 'news'))) {
        $('#admin-header_main-name').text('AKCIJAS / ZIŅAS');
        // if ($.cookie('admin-burger_btns') == 'discounts') {

        // }else{

        // }
    }

    if ($.cookie('admin-burger_btns') == 'contacts') {
        $('#admin-header_main-name').text('KONTAKTI');
    }
})