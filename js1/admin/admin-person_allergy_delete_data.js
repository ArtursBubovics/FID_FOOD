$(document).ready(function() {
    $('.allergy_delete-btn').click(function() {
      var field = $(this).closest('.allergy_field');
      var fieldText = field.find('p').text();

      // Отправка AJAX-запроса на сервер для удаления записи с указанным индексом
      $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/person_allergy_delete_data.php',
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
  