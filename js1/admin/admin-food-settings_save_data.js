$(document).ready(function () {
    $('#confirm_btn_2').click(function () {
    var inputValue = $.trim($('#inputField2').val());
        if (inputValue != "") {
            saveInputValue(inputValue);
        }
    })

    function saveInputValue(inputValue) {
        $.ajax({
            url: '/FID_FOOD/php/admin/admin_backend/food-settings_save_data.php', // Замените на адрес вашего серверного обработчика
            method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
            data: {
                inputValue: inputValue,
            },
            success: function (response) {
                // Обработка успешного ответа от сервера
                $('#inputField2').val("");
                console.log(response);
            },
            error: function (error) {
                // Обработка ошибки при отправке запроса
                console.log(error);
            }

        });
    }
})