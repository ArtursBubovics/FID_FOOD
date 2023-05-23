$(document).ready(function () {

    $('#contacts-address, #contacts-phone, #contacts-work_time, #contacts-gmail, #contacts-facebook_link, #contacts-twitter_link, #contacts-instagram_link').on('input', function () {

        // Получаем значения из input элементов
        var input1Value = $('#contacts-address').val();
        var input2Value = $('#contacts-phone').val();
        var input3Value = $('#contacts-work_time').val();
        var input4Value = $('#contacts-gmail').val();
        var input5Value = $('#contacts-facebook_link').val();
        var input6Value = $('#contacts-twitter_link').val();
        var input7Value = $('#contacts-instagram_link').val();

        console.log(input1Value, ', ', input2Value, ', ', input3Value, ', ', input4Value, ', ', input5Value, ', ', input6Value, ', ', input7Value);

        // Получите значения других input элементов, если есть

        // Отправляем AJAX запрос на сервер
        $.ajax({
            url: '/FID_FOOD/php/admin/admin_backend/contacts_save_data.php', // Замените на адрес вашего серверного обработчика
            method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
            data: {
                input1: input1Value,
                input2: input2Value,
                input3: input3Value,
                input4: input4Value,
                input5: input5Value,
                input6: input6Value,
                input7: input7Value,
                // Передайте другие значения, если есть
            },
            success: function (response) {
                // Обработка успешного ответа от сервера
                console.log(response);
            },
            error: function (error) {
                // Обработка ошибки при отправке запроса
                console.log(error);
            }

        });

    })
});