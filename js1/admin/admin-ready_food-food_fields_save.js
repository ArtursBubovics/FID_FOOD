$(document).ready(function () {
    $('#confirm_btn_1').click(function () {
    var inputValue = $.trim($('#inputField1').val());
        if (inputValue != "") {
            saveInputValue(inputValue);
        }
    })

    function saveInputValue(inputValue) {
        $.ajax({
            url: '/FID_FOOD/php/admin/admin_backend/food-categories_save_data.php',
            method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
            data: {
                inputValue: inputValue,
            },
            success: function (response) {
                // Обработка успешного ответа от сервера
                $('#inputField1').val("");
                console.log(response);
            },
            error: function (error) {
                // Обработка ошибки при отправке запроса
                console.log(error);
            }

        });
    }
})