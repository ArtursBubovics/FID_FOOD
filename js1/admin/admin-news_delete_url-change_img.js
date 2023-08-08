$(document).ready(function() {
    $('.news-delete-btn').click(function() {
      var divIndex = $(this).closest('.dicounts_news-body-cell').index();

      console.log(divIndex);
      // Отправка AJAX-запроса на сервер для удаления записи с указанным индексом
      $.ajax({
        url: '/FID_FOOD/php/admin/admin_backend/news_delete_img_for_admin.php',
        method: 'POST',
        data: { divIndex: divIndex+1 },
        success: function(response) {
            $('.dicounts_news-body-cell').eq(divIndex).remove();
        },
        error: function() {
          // Обработка ошибки удаления записи
        }
      });
    });
  });
  