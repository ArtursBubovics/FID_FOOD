function recipes_products_check_and_save(RecepteID) {
    var rows = $('.recipes_products'); // Получаем все строки с классом 'recipes_products'

    var data = []; // Массив для хранения данных всех полей

    rows.each(function () {
        var row = $(this);
        var name = row.find('input[type="text"]').val().trim();
        var calories = row.find('input[type="number"]').eq(0).val().trim();
        var protein = row.find('input[type="number"]').eq(1).val().trim();
        var fat = row.find('input[type="number"]').eq(2).val().trim();
        var carbohydrates = row.find('input[type="number"]').eq(3).val().trim();
        var quantity = row.find('input[type="number"]').eq(4).val().trim();
        var measurement = row.find('input[type="text"]').eq(1).val().trim();
        var price = row.find('input[type="number"]').eq(5).val().trim();

        // Добавляем данные текущей строки в массив
        var rowData = {
            name: name,
            calories: calories,
            protein: protein,
            fat: fat,
            carbohydrates: carbohydrates,
            quantity: quantity,
            measurement: measurement,
            price: price
        };

        data.push(rowData);
    });

    // Отправляем данные на сервер
    $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/save_second_recipes_data.php',
        method: 'POST',
        data: {
            data: JSON.stringify(data),
            RecepteID: RecepteID
        },
        success: function (response) {
            // Обработка успешного ответа от сервера
            console.log('Данные сохранены успешно');
        },
        error: function (error) {
            // Обработка ошибки при отправке запроса
            console.log(error);
        }
    });
}