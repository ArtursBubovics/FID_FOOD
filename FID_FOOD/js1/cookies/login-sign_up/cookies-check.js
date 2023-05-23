$(document).ready(function () {
    if ($.cookie('in_account') == 1) {
        $("#account_icon").attr("src", "img1/account-in_account.png");
        $("#login-sign_up-page").attr("href", "registered_user_page.php");
        $("#obligatory_registration_inscription").hide();
      }
})