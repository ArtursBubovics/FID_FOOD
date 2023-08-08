$(document).ready(function () {

  $('#add_btn_in_basket').click(function () {
    if ($('#datepicker').val().trim() === '') {
      $('#izvelneDeliverySettingsPopup').addClass('show_popup');
      setTimeout(function () {
        if ($('#izvelneDeliverySettingsPopup').hasClass('show_popup')) {
          $('#izvelneDeliverySettingsPopup').removeClass('show_popup');
        }
      }, 9000);
    } else {
      var calorie_count = $('#calorie_count').text(),
        amount_of_days = $('#return-slider-value').text(),
        price_per_day = $('#price_per_day').text(),
        final_discounted_price = $('#final_discounted_price').text().trim(),
        number_of_people_to_count_portions = $('#number_of_people_to_count_portions').text().trim(),
        datetimeValue = $('#datepicker').val(),
        dateValue = datetimeValue.split(' ')[0],
        timeValue = datetimeValue.split(' ')[1];

      // Получение сохраненных данных заказов из SessionStorage
      var savedOrdersString = sessionStorage.getItem("orders");

      // Проверка наличия сохраненных данных и сохраняется в уже сущ массив или в новый
      var savedOrders = savedOrdersString ? JSON.parse(savedOrdersString) : [];

      // Проверка на повторение заказа
      var isRepeatedOrder = savedOrders.some(function (order) { //some проверяется каждое поле в массиве на схожесть
        return order.calorie_count === calorie_count &&
          order.amount_of_days === amount_of_days &&
          order.price_per_day === price_per_day &&
          order.final_discounted_price === final_discounted_price &&
          order.number_of_people_to_count_portions === number_of_people_to_count_portions &&
          order.dateValue === dateValue &&
          order.timeValue === timeValue;
      });

      if (!isRepeatedOrder) {
        // Добавление нового заказа в массив
        var newOrderData = {
          calorie_count: calorie_count,
          amount_of_days: amount_of_days,
          price_per_day: price_per_day,
          final_discounted_price: final_discounted_price,
          number_of_people_to_count_portions: number_of_people_to_count_portions,
          dateValue: dateValue,
          timeValue: timeValue
        };
        savedOrders.push(newOrderData); //добавляется в конец массива savedOrders с помощью метода push()

        // Преобразование массива заказов в строку JSON
        var updatedOrdersString = JSON.stringify(savedOrders);

        // Сохранение обновленного массива заказов в SessionStorage
        sessionStorage.setItem("orders", updatedOrdersString);

        // Вывод сообщения об успешном добавлении заказа
        console.log("Заказ успешно добавлен в корзину.");
      } else {
        // Вывод сообщения об ошибке повторения заказа
        console.log("Такой заказ уже существует в корзине.");
      }
    }
  });
});