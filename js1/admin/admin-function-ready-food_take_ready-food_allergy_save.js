function save_ready_food_allergy_fields_with_food_Id(lastInsertedId, allergyArray) {
    
    console.log(allergyArray);
    $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/function-ready-food_take_ready-food_allergy_save.php', // Замените на адрес вашего серверного обработчика
        method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
        data: {
            input1: lastInsertedId,
            input2: allergyArray
        },
        success: function (response) {
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error('Ошибка');
        }

    });
}