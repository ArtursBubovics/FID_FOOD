$(document).ready(function () {
    $('#confirm_btn_3').click(function () {
    var inputValue = $.trim($('#inputField3').val());
        if (inputValue != "") {
            saveInputValue(inputValue);
        }
    })

    function saveInputValue(inputValue) {
        $.ajax({
            url: '/FID_FOOD/php/admin/admin_backend/person_allergy_save_data.php', // Замените на адрес вашего серверного обработчика
            method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
            data: {
                inputValue: inputValue,
            },
            success: function (response) {
                // Обработка успешного ответа от сервера
                $('#inputField3').val("");
                console.log(response);
            },
            error: function (error) {
                // Обработка ошибки при отправке запроса
                console.log(error);
            }

        });
    }
})