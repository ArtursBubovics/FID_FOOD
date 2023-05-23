<?php
include('header.php');
?>

<div class="w_and_h-100_percent padding-30px-80px-20px margin-bottom_5_percent">
    <div class="div_display-flex_justify-content-center_align-items-center padding-bottom-15px">
        <h1 class="h1-size_60px font-weight_normal div_text-align-center">Gatavu ēdienu recepti</h1>
    </div>
    <div>
        <div class="div_display-flex_justify-content-flex-end_align-items-center">
            <div class="w-95_percent_h-100_percent div_display-flex_justify-content-space-between_align-items-center">
                <div class="w-300px_h-100_percent">
                    <input type="text" id="name_food" name="name_food" placeholder="Ēdiena nosaukums" class="w-100_percent_h-50px padding_left placeholder-padding-top_5px placeholder-font-size_18px">
                </div>
                <div class="w_and_h-auto">
                    <select name="user_profile_color_2" required="required" class="w-200px_h-50px padding-left-20px p-font_size_16px">
                        <option value="">Gatavošanas laiks</option>
                        <option value="1">Mazāk par 30 min</option>
                        <option value="2">No 30 min līdz 1 st</option>
                        <option value="3">No 1 st līdz 1.30 st</option>
                        <option value="4">No 1.30 st līdz 2 st</option>
                        <option value="5">Vairāk par 2 st</option>
                    </select>
                </div>
                <div class="w_and_h-auto">
                    <select name="user_profile_color_2" required="required" class="w-180px_h-50px padding-left-20px p-font_size_16px">
                        <option value="">Kaloriju skaits</option>
                        <option value="1">500</option>
                        <option value="2">1000</option>
                        <option value="3">1500</option>
                        <option value="4">2000</option>
                        <option value="5">2500</option>
                        <option value="6">3000</option>
                        <option value="7">3500</option>
                    </select>
                </div>
                <div class="w-auto_perce_h-100_percent">
                    <select name="user_profile_color_2" required="required" class="w-300px_h-50px padding-left-20px p-font_size_16px">
                        <option value="">Ēdienu kategorijas</option>
                        <option value="1">Karsts ēdiens</option>
                        <option value="2">Auksts ēdiens</option>
                        <option value="3">Dzērieni</option>
                        <option value="4">Deserti</option>
                    </select>
                </div>
                <div class="w-auto_h-100_percent">
                    <button class="w-auto_h-50px padding-10px btn_with_white_color border_1px_solid_black-border-radious_10px padding-left-right-20px">
                        <p class="text_color-green p-font_size_20px">
                            Atzīmētie receptes
                        </p>
                    </button>
                </div>
                <div class="w-auto_h-100_percent">
                    <button class="w-auto_h-50px padding-10px btn_with_white_color border_1px_solid_black-border-radious_10px padding-left-right-20px">
                        <p class="text_color-green p-font_size_20px">
                            Receptes detaļas
                        </p>
                    </button>
                </div>
            </div>
        </div>
        <div class="div_display-flex">
            <div class="w-30_percent_h-100_percent padding-top-20px">
                <div class="div_display-flex_justify-content-center_align-items-center padding-bottom-15px">
                    <button class="btn_with_white_color w-80_percent_h-45px border_1px_solid_black-border-radious_10px">
                        <p class="text_color-green p-font_size_20px ">
                            Atlasīt pasūtījumu
                        </p>
                    </button>
                </div>
                <div class="div_display-flex_justify-content-center_align-items-center">
                    <button class="btn_with_white_color w-80_percent_h-45px border_1px_solid_black-border-radious_10px">
                        <p class="text_color-green p-font_size_20px">
                            Nottīrīt filtru
                        </p>
                    </button>
                </div>
            </div>
            <div class="w-1300px_h-100_percent div_display-flex_justify-content-space-evenly_align-items-center div_flex-wrap_wrap margin-top_20px padding-top-25px div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_01">
                <!-- карточки -->
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 1 -->
                    <div class="cursor_pointer">
                        <a href="recipes-recipe_page.php">
                            <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                        </a>
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 2 -->
                    <div class="cursor_pointer">
                        <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 3 -->
                    <div class="cursor_pointer">
                        <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 4 -->
                    <div class="cursor_pointer">
                        <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 4 -->
                    <div class="cursor_pointer">
                        <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 4 -->
                    <div class="cursor_pointer">
                        <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
                <div class="w-600px_h-200px div_display-flex div-box_shadow_0px_0px_1px_1px_rgba-0_0_0_02 margin-bottom_20px"><!-- карточка 4 -->
                    <div class="cursor_pointer">
                        <img src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="" class="w-auto_h-100_percent">
                    </div>
                    <div class="padding-20px div-positon_relative">
                        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">
                            <h3 class="h3-size_25px font-weight_normal div_text-align-center">Grillēta tītara krūtiņa ar dārzeņiem</h3>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-left-18px div-position_absolute-top_0-left_0">
                            <p class="padding-right-3px">Ccal</p>
                            <p>12</p>
                        </div>
                        <div class="div_display-flex padding-top-20px padding-right-18px div-position_absolute-top_0-right_0">
                            <p class="padding-right-3px">St</p>
                            <p>1</p>
                        </div>
                        <div class="div_display-flex padding-right-18px div-position_absolute-bottom_0-right_0 padding-bottom-25px padding-right-25px">
                            <img src="../../../img1/icon-more.png" alt="" class="opacity-03 cursor_pointer">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include "footer.php";
?>