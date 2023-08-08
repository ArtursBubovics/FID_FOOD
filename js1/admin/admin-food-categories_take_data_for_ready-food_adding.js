$(document).ready(function() {
    // Прослушиваем событие нажатия кнопки
    $('#btnCategoriesShowField').click(function() {
      // Получаем выбранное значение из <select>
      var selectedValue = $(this).closest('.card').find('#categoriesSelect').val();

      var existingElement = $('.categories p:contains(' + selectedValue + ')');

      if (existingElement.length > 0) {
        // Если элемент уже существует, не выполняем никаких действий
        return;
      }
      
      // Создаем новый элемент <div> с выбранным значением
      var newDiv = $('<div>', {
        class: 'categories_field w_and_h-auto div_display-flex padding-left-18px',
        html: `
          <div>
              <p class="p-font_size_23px">${selectedValue}</p>
          </div>
          <div class="categories_delete-btn div_display-flex">
              <div class="div_display-flex_justify-content-center_align-items-center padding-0px-10px-0px">
                  <img src="../../../img1/image_delete.png" alt="" class="cursor_pointer">
              </div>
          </div>
        `
      });
      
      // Добавляем новый элемент <div> в контейнер
      $('#categoriesDivContainer').append(newDiv);
    });
  });