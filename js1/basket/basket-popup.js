$(document).ready(function () {
        $('#btn_confirm_the_order').click(function () {
                $('#basketPopup').addClass('show_popup');
                setTimeout(function () {
                        if ($('#basketPopup').hasClass('show_popup')) {
                                $('#basketPopup').removeClass('show_popup');
                        }
                }, 4000);
        })

})