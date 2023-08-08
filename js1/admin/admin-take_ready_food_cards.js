$(document).ready(function () {
    // Выполняем AJAX-запрос к серверу для получения данных из базы данных
    $.ajax({
        url: 'get_food_data.php', // Файл, который будет обрабатывать запрос
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            // Формируем карточки еды на основе полученных данных
            response.forEach(function (food) {
                var cardHtml = '<div class="food-card">';
                cardHtml += '<h3>' + food.name + '</h3>';
                cardHtml += '<img src="' + food.image + '">';
                cardHtml += '<p>Calories: ' + food.calories + '</p>';
                cardHtml += '<p>Protein: ' + food.protein + '</p>';
                cardHtml += '<p>Fat: ' + food.fat + '</p>';
                cardHtml += '<p>Carbohydrates: ' + food.carbohydrates + '</p>';
                cardHtml += '</div>';

                $('#food-container').append(cardHtml);
            });
        },
        error: function () {
            alert('Ошибка при получении данных из базы данных.');
        }
    });
});