$(".login-button").click(function (e) {
    e.preventDefault();

    $(`input`).removeClass(" error");

    let signin_gmail = $("input[name='signin_gmail']").val(),
        signin_password = $("input[name='signin_password']").val()

    $.ajax({
        url: "/FID_FOOD/php/user/user_backend/login-check.php",
        type: "POST",
        dataType: "json",
        data: {
            signin_gmail: signin_gmail,
            signin_password: signin_password
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

                $(".msg-login").removeClass(" none").text(data.message);
            }

        }

    });
});