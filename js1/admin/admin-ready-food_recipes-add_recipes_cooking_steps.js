$(".add_cooking_steps_field").click(function () {
    var card = $(this).closest('.recipes_card');
    var lastMiniCard = card.find(".cooking_step").last(); // Находим последнюю карточку

    var template = `<div class="cooking_step div_display-flex">
    <div class="add_cooking_step_img padding-top-20px_left-right-60px_botttom-30px">
        <div class="dicounts_news-img border_1px_solid_black-border-radious_15px padding-20px div-positon_relative cursor_pointer">
            <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                <div class="w_and_h-50px div_display-flex_justify-content-center_align-items-center border_1px_solid_black-border-radious_25px">
                    <img src="../../../img1/icon-plus.png" alt="">
                </div>
            </div>
            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px">
                <h2 class="h2-size_35px font-weight_normal">Pievienot</h2>
            </div>
        </div>
    </div>
    <div class="w_and_h-100_percent padding-top-20px_left-right-60px_botttom-30px">
        <textarea class="w-100_percent_h-300px" rows="5" cols="40"></textarea>
    </div>
</div>`;

    card.find("#cooking_steps").append(template);
});