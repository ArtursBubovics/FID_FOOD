$(document).ready(function() {
    $('#logout').click(function() {
        $.removeCookie('in_account'); // Удаление куки с именем 'in_account'

        window.location.href = '/FID_FOOD/php/user/user_pages/index.php';
    });
});