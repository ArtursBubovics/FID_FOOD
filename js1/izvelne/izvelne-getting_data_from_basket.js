$(document).ready(function() {
    var savedOrdersString = sessionStorage.getItem("orders");
  
    if (savedOrdersString) {
      var savedOrders = JSON.parse(savedOrdersString); // Преобразование строки JSON в объекты заказов
  
      var table = $("table.w_and_h-100_percent");
  
      // Создание строк для каждого заказа в массиве
      for (var i = 0; i < savedOrders.length; i++) {
        var order = savedOrders[i];
  
        // Создание строки таблицы
        var tableRow = $("<tr>").addClass("border_bottom-1px_solid_50c648");
  
        // Создание ячеек и добавление содержимого
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<img>").attr("src", "../../../img1/basket-img-1.PNG").attr("alt", "")));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<p>").addClass("p-font_size_20px").text(order.calorie_count)));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<button>").addClass("main_btn padding-top-botttom-6px_left-right-10px div_display-flex_justify-content-center_align-items-center margin-0-auto").append($("<p>").addClass("text_color-white p-font_size_18px p-font_size_15px").text("Apskatīt"))));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<p>").addClass("p-font_size_20px").text(order.number_of_people_to_count_portions)));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<p>").addClass("p-font_size_20px").text(order.amount_of_days)));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<p>").addClass("p-font_size_20px").text(order.dateValue)));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<p>").addClass("p-font_size_20px").text(order.timeValue)));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<p>").addClass("final_discounted_price p-font_size_20px").text(order.final_discounted_price)));
        tableRow.append($("<td>").addClass("div_text-align-center").append($("<img>").addClass("cursor_pointer w_and_h-20px").attr("src", "../../../img1/image_delete.png").attr("alt", "")));
  
        // Добавление строки в таблицу
        table.append(tableRow);
      }
    }
  });
  