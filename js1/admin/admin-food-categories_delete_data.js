$(document).ready(function() {
    $('.categories_delete-btn').click(function() {
      var field = $(this).closest('.categories_field');
      var fieldText = field.find('p').text();
      
      console.log(fieldText);

      // Отправка AJAX-запроса на сервер для удаления записи с указанным индексом
      $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/food-categories_delete_data.php',
        method: 'POST',
        data: { fieldText: fieldText },
        success: function(response) {
            field.remove();
        },
        error: function() {
          // Обработка ошибки удаления записи
        }
      });
    });
  });
  