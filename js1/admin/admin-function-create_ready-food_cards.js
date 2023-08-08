function create_new_ready_food_card() {
    var cardCount = 1;

    // Получение значений полей внутри текущей карточки
    var name = $('#name').val();
    var markup = $('#markup').val();

    // Создание новой карточки с автоматической нумерацией
    var newCard = $('.food_card').first().clone();
    newCard.find('input').val(''); // Очистка полей новой карточки
    newCard.find('.h2-size_35px').text(++cardCount + '.'); // Нумерация новой карточки
    newCard.find('#name').val(name); // Установка значения поля "NOSAUKUMS"
    newCard.find('#markup').val(markup); // Установка значения поля "UZCRŅOJUMS"

    // Добавление новой карточки в контейнер
    $('#cards').append(newCard);
}