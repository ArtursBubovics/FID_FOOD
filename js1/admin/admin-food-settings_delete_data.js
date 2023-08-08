$(document).ready(function() {
    $('.features_delete-btn').click(function() {
      var field = $(this).closest('.features_field');
      var fieldText = field.find('p').text();

      // Отправка AJAX-запроса на сервер для удаления записи с указанным индексом
      $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/food-settings_delete_data.php',
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
  