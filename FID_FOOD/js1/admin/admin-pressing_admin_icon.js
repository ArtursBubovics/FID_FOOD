$(document).ready(function () {
    $('.hiddenAdminIconField').hide();
    $('#admin-account_btn').click( function(){
        $('.hiddenAdminIconField').toggle();
    })
})