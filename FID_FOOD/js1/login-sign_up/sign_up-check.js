// method="POST" action="sign_up-chech.php" class="login-sign_up_content">

$(".registration-button").click(function(e){
    e.preventDefault();

    $(`input`).removeClass(" error");
    
    let login = $("input[name='login']").val(),
        gmail = $("input[name='gmail']").val(),
        password = $("input[name='password']").val(),
        password_confirmation = $("input[name='password_confirmation']").val();

    $.ajax({
       url: "sign_up-check.php",
       type: "POST",
       dataType: "json",
       data:{
            login: login,
            gmail: gmail,
            password: password,
            password_confirmation: password_confirmation
       },
       
       success (data){
            if(data.status){
                $("#account_icon").attr("src", "icon-account-in_account.png");
                document.location.href = "index.php";
            }else{
                if(data.type === 1){
                    
                    data.fields.forEach(function(field){
                        $(`input[name='${field}']`).addClass(" error");
                    });
                }
                
                $(".msg").removeClass(" none").text(data.message);
            }


           
       }
            
    });
});