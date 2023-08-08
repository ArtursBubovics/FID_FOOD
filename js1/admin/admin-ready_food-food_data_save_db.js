function save_ready_food_fields_to_db() {
    var args = Array.from(arguments); // Преобразование объекта аргументов в массив

    // Далее вы можете использовать значения из массива args по индексу
    var name = args[0];
    var markup = args[1];
    var main_foto = args[2];

    var categoriesArray = args[3];

    var allergyArray = args[4];

    var imagePathArray = args[5];

    var settingsArray = args[6];

    $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/ready-food_take_ready-food_name-and-markup-and-foto_url_save.php', // Замените на адрес вашего серверного обработчика
        method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
        data: {
            input1: name,
            input2: markup,
            input3: main_foto
        },
        success: function (response) {
            var data = JSON.parse(response);
            if (data.success) {
                var lastInsertedId = data.lastInsertedId;

                // Используйте полученный lastInsertedId в JavaScript-коде
                console.log("ID созданной записи: " + lastInsertedId);
                
                if (categoriesArray.length > 0) {
                    save_ready_food_categories_fields_with_food_Id(lastInsertedId, categoriesArray);
                }

                if (allergyArray.length > 0) {
                    save_ready_food_allergy_fields_with_food_Id(lastInsertedId, allergyArray);
                }

                if (settingsArray.length > 0) {
                    save_ready_food_settings_fields_with_food_Id(lastInsertedId, settingsArray);
                }

                if (imagePathArray.length > 0) {
                    save_ready_food_imagePath_fields_with_food_Id(lastInsertedId, imagePathArray);
                }

            } else {
                var error = data.error;
                // Обработайте ошибку, если не удалось добавить данные в базу данных
                console.log("Ошибка: " + error);
            }
        },
        error: function (error) {
            // Обработка ошибки при отправке запроса
            console.log(error);
        }

    });

}