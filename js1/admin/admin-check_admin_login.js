$(document).ready(function () {
    $('.admin_login-login_btn').click(function () {
        var admin_name = $('#name_admin_login').val().trim(),
            admin_password = $('#password_admin_login').val().trim()
        if (admin_name != '') {
            if (admin_password != '') {
                $.ajax({
                    url: "/FID_FOOD/php/admin/admin_backend/admin-check_admin-login_fields.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        input1: admin_name,
                        input2: admin_password
                    },
                    success: function (data) {
                        // Обработка успешного ответа от сервера
                        if(data.status == 'success'){
                            window.location.href = "/FID_FOOD/php/admin/admin_pages/admin-admin_panel_ALLERGY-SETTINGS-AND-PREFERENCES.php";
                        }
                    },
                    error: function (error) {
                        // Обработка ошибки при отправке запроса
                        console.log(error);
                    }
                });
            }
        }
    })
})