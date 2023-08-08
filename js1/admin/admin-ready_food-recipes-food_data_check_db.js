$(document).ready(function () {
    $('.save_ready_food_btn').click(function () {
        var card = $(this).closest('.recipes_card');

        var recipes_name = card.find('#ready_foods').val().trim();

        var cooking_time = card.find('#cooking_time').val().trim();

        if(recipes_name == ""){
            $('#recipes-name_recipesPopup').addClass('show_popup');
            setTimeout(function () {
                if ($('#recipes-name_recipesPopup').hasClass('show_popup')) {
                    $('#recipes-name_recipesPopup').removeClass('show_popup');
                }
            }, 4000);
        }

        if(cooking_time == ""){
            $('#recipes-cooking_timePopup').addClass('show_popup');
            setTimeout(function () {
                if ($('#recipes-cooking_timePopup').hasClass('show_popup')) {
                    $('#recipes-cooking_timePopup').removeClass('show_popup');
                }
            }, 4000);
        }

        $.ajax({
            url: '/FID_FOOD/php/admin/admin_backend/save_first_recipes_data.php',
            method: 'POST',
            data: {
                recipes_name: recipes_name,
                cooking_time: cooking_time
            },
            success: function (response) {
                var RecepteID = parseInt(response); // Парсим полученный ответ сервера в число
                console.log(RecepteID);
                if (!isNaN(RecepteID)) {
                    // Выполняем функцию recipes_products_check_and_save с передачей RecepteID
                    recipes_products_check_and_save(RecepteID);
                } else {
                    console.log('Ошибка получения RecepteID');
                }
            },
            error: function (error) {
                // Обработка ошибки при отправке запроса
                console.log(error);
            }

        });

    })
});