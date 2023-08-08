$(document).ready(function(){
    $('#order_btn').click(function(){
        if($.cookie('in_account') == 1){
            $('#last_step_of_registration').show();
        }else{
            $('#basketLoginPopup').addClass('show_popup');
            setTimeout(function () {
                    if ($('#basketLoginPopup').hasClass('show_popup')) {
                            $('#basketLoginPopup').removeClass('show_popup');
                    }
            }, 4000);
        }
    })
})