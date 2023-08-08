function save_ready_food_categories_fields_with_food_Id(lastInsertedId, categoriesArray) {
    
    $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/function-ready-food_take_ready-food_categories_save.php', // Замените на адрес вашего серверного обработчика
        method: 'POST', // Используйте метод, который ваш сервер ожидает (например, POST)
        data: {
            input1: lastInsertedId,
            input2: categoriesArray
        },
        success: function (response) {
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error('Ошибка');
        }

    });
}