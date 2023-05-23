$(document).ready(function () {
        $('#btn_confirm_the_order').click(function () {
                $('#popup').addClass('show_popup');
                setTimeout(function () {
                        if ($('#popup').hasClass('show_popup')) {
                                $('#popup').removeClass('show_popup');
                        }
                }, 4000);
        })

})