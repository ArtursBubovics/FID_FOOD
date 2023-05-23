
$(".login-admin-button").click(function(e){
    e.preventDefault();

    $(`input`).removeClass(" error");
    
    let admin_sign_in_name = $("input[name='admin_sign_in_name']").val(),
        admin_sign_up_password_1 = $("input[name='admin_sign_up_password_1']").val(),
        admin_sign_up_password_2 = $("input[name='admin_sign_up_password_2']").val()

    $.ajax({
       url: "admin-login-check.php",
       type: "POST",
       dataType: "json",
       data:{
            admin_sign_in_name: admin_sign_in_name,
            admin_sign_up_password_1: admin_sign_up_password_1,
            admin_sign_up_password_2: admin_sign_up_password_2
       },
       
       success (data){
            if(data.status){
                document.location.href = "function_administrator.php";
            }else{
                if(data.type === 1){
                    
                    data.fields.forEach(function(field){
                        $(`input[name='${field}']`).addClass(" error");
                    });
                }
                
                $(".msg-admin-login").removeClass(" none").text(data.message);
            }


           
       }
            
    });
});