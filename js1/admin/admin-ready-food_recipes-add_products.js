$(".add_products_field").click(function () {
    var card = $(this).closest('.recipes_card');
    var lastMiniCard = card.find(".recipes_products").last(); // Находим последнюю карточку

    // Проверяем, есть ли пустые поля в последней карточке
    var emptyFields = lastMiniCard.find("input[type='text'], input[type='number']").filter(function () {
        return $(this).val().trim() === ""; // Проверяем пустое значение поля
    });

    // Если есть пустые поля, не создаем новую карточку
    if (emptyFields.length > 0) {
        return; // Выходим из обработчика события
    }

    var template = `<div class="recipes_products div_display-flex div_flex-wrap_wrap padding-top-10px_left-right-60px_botttom-30px">
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Nosaukums</p>
                            </div>
                            <div>
                                <input type="text" class="w-250px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Kaloriji</p>
                            </div>
                            <div>
                                <input type="number" min="0" class="w-200px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Olbaltumvielas</p>
                            </div>
                            <div>
                                <input type="number" min="0" class="w-200px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Tauki</p>
                            </div>
                            <div>
                                <input type="number" min="0" class="w-200px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Ogļhidrāti</p>
                            </div>
                            <div>
                                <input type="number" min="0" class="w-200px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Daudzums</p>
                            </div>
                            <div>
                                <input type="number" min="0" class="w-200px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Merijums</p>
                            </div>
                            <div>
                                <input type="text" class="w-200px_h-30px">
                            </div>
                        </div>
                        <div class="padding-right-18px margin-bottom_10px">
                            <div>
                                <p class="p-font_size_20px">Cena uz 100.g</p>
                            </div>
                            <div>
                                <input type="number" min="0" class="w-200px_h-30px">
                            </div>
                        </div>
                    </div>`;

    card.find("#recipes_products_div").append(template);
});
