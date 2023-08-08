$(document).ready(function() {
    var savedOrdersString = sessionStorage.getItem("orders");
    var savedOrders = savedOrdersString ? JSON.parse(savedOrdersString) : [];
    
    $("table.w_and_h-100_percent").on("click", "img.cursor_pointer", function() {
      var tableRow = $(this).closest("tr"); // Находим ближайшую строку таблицы
  
      // Находим индекс удаляемой строки в таблице
      var rowIndex = tableRow.index();
      
      // Удаляем строку из таблицы
      tableRow.remove();

      // Удаляем соответствующий заказ из массива savedOrders
      savedOrders.splice(rowIndex-1, 1);
      
      // Преобразование массива заказов в строку JSON
      var updatedOrdersString = JSON.stringify(savedOrders);
    
      // Обновление данных в SessionStorage
      sessionStorage.setItem("orders", updatedOrdersString);
    });
  });
  