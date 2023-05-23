$(".login-button").click(function (e) {
    e.preventDefault();

    $(`input`).removeClass(" error");

    let signin_gmail = $("input[name='signin_gmail']").val(),
        signin_password = $("input[name='signin_password']").val()

    $.ajax({
        url: "login-check.php",
        type: "POST",
        dataType: "json",
        data: {
            signin_gmail: signin_gmail,
            signin_password: signin_password
        },

        success(data) {
            if (data.status) {
                document.location.href = "index.php";
                $.cookie('in_account', '1', { expires: 30 });

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