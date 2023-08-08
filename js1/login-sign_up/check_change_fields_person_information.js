$(document).ready(function(){
    $('#person_informations_name, #person_informations_gmail, .person_informations_phone, .person_informations_addrese, #person_informations_password').on('input', function () {
        var person_informations_name = $('#person_informations_name').val(),
        person_informations_gmail = $('#person_informations_gmail').val(),
        person_informations_phone = $('.person_informations_phone').val(),
        person_informations_addrese = $('.person_informations_addrese').val(),
        person_informations_password = $('#person_informations_password').val()

        console.log(person_informations_addrese);

        $.ajax({
            url: '/FID_FOOD/php/user/user_backend/check_change_fields_person_information.php', // Замените на адрес вашего серверного обработчика
            method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
            data: {
                input1: person_informations_name,
                input2: person_informations_gmail,
                input3: person_informations_phone,
                input4: person_informations_addrese,
                input5: person_informations_password
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
})