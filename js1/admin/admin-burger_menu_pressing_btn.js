$(document).ready(function(){
    $('#ALLERGY-SETTINGS-AND-PREFERENCES_btn').click(function(){
        $.removeCookie('admin-burger_btns');
        $.cookie('admin-burger_btns', 'allergy-settings-and-preferences', { expires: 30 });
    })

    $('#READY-FOOD_btn').click(function(){
        $.removeCookie('admin-burger_btns');
        $.cookie('admin-burger_btns', 'ready-food', { expires: 30 });
    })

    $('#RECIPES_btn').click(function(){
        $.removeCookie('admin-burger_btns');
        $.cookie('admin-burger_btns', 'recipes', { expires: 30 });
    })

    $('#DISCOUNTS_btn').click(function(){
        $.removeCookie('admin-burger_btns');
        $.cookie('admin-burger_btns', 'discounts', { expires: 30 });

    })

    $('#NEWS_btn').click(function(){
        $.removeCookie('admin-burger_btns');
        $.cookie('admin-burger_btns', 'news', { expires: 30 });
    })

    $('#CONTACTS_btn').click(function(){
        $.removeCookie('admin-burger_btns');
        $.cookie('admin-burger_btns', 'contacts', { expires: 30 });
    })
})