$(document).ready(function(){
    $('#order_btn').click(function(){
        if($.cookie('in_account') == 1){
            $('#last_step_of_registration').show();
        }else{
            window.location.href = 'login-sign_up.php';
        }
    })
})