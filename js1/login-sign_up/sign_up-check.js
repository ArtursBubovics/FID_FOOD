// method="POST" action="sign_up-chech.php" class="login-sign_up_content">

$(".registration-button").click(function (e) {
    e.preventDefault();

    $(`input`).removeClass(" error");

    let login = $("input[name='login']").val(),
        gmail = $("input[name='gmail']").val(),
        password = $("input[name='password']").val(),
        password_confirmation = $("input[name='password_confirmation']").val();

    $.ajax({
        url: "/FID_FOOD/php/user/user_backend/sign_up-check.php",
        type: "POST",
        dataType: "json",
        data: {
            login: login,
            gmail: gmail,
            password: password,
            password_confirmation: password_confirmation
        },


        success(data) {
            if (data.status) {
                $("#account_icon").attr("src", "/FID_FOOD/img1/icon-account-in_account.png");
                window.location.href = "/FID_FOOD/php/user/user_pages/index.php";
                $.cookie('in_account', '1', {
                    expires: 30
                });
            } else {
                if (data.type === 1) {

                    data.fields.forEach(function (field) {
                        $(`input[name='${field}']`).addClass(" error");
                    });
                }

                $(".msg").removeClass(" none").text(data.message);
            }



        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }

    });
});