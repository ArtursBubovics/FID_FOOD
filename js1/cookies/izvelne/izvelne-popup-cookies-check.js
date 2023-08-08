$(document).ready(function () {
    $('#btn_confirm_the_order-ready_food').click(function () {
        if ($.cookie('in_account') != 1) {
            $('#izvelnePopup').addClass('show_popup');
            setTimeout(function () {
                if ($('#izvelnePopup').hasClass('show_popup')) {
                    $('#izvelnePopup').removeClass('show_popup');
                }
            }, 8000);
        }else{
            $('#last_step_of_registration_in_izvelne').show();
        }

    })

})