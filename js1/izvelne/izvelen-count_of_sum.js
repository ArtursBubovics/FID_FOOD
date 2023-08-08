$(document).ready(function() {
    var totalPrice = 0; // Переменная для хранения суммы цен
  
    // Обход всех элементов с классом final_discounted_price
    $('.final_discounted_price').each(function() {
      var price = parseFloat($(this).text()); // Получение значения цены и преобразование в число
  
      if (!isNaN(price)) { // Проверка, что значение является числом
        totalPrice += price; // Добавление цены к общей сумме
      }
    });
  
    // Вывод общей суммы в элемент с классом total_price
    $('#total_price').text(totalPrice);
  });
  