<?php
include('../../general/general_backend/head.php');
include "admin-header_main.php";
?>


<div class="w_and_h-100_percent div-positon_relative padding-100px">

    <div>
        <!-- карточки -->

        <!-- карточка 1 -->
        <div class="recipes_card border-1px_solid_black div-positon_relative padding-top-botttom-60px_left-right-100px margin-bottom_20px">
            <div class="div_display-flex">
                <div class="padding-right-12px">
                    <h2 class="h2-size_35px font-weight_normal">1.</h2>
                </div>
                <div>
                    <h2 class="h2-size_35px font-weight_normal">RECEPTE</h2>
                </div>
            </div>

            <div class="div_display-flex padding-top-10px_left-right-60px_botttom-30px">
                <div class="div_display-flex div_flex-wrap_wrap">
                    <div class="padding-right-18px margin-bottom_10px">
                        <div>
                            <p class="p-font_size_20px">GATAVOŠANAS ĒDIENA NOSAUKUMS</p>
                        </div>
                        <?php include "../admin_backend/ready-food_take_data_for_recipes.php"; ?>
                    </div>
                    <div class="padding-right-18px margin-bottom_10px">
                        <div>
                            <p class="p-font_size_20px">GATAVOŠANAS LAIKS MINŪTĒS</p>
                        </div>
                        <div>
                            <input id="cooking_time" type="number" min="0" class="w-330px_h-30px">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="div_display-flex padding-top-botttom-5px_left-right-0px">
                        <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                            <h3 class="h3-size_26px font-weight_normal">SASTĀVS / SASTĀVDAĻAS</h3>
                        </div>
                        <button class="btnShowField div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px">
                            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px padding-top-2px">
                                <img src="../../../img1/icon-plus.png" alt="" class="">
                            </div>
                            <div class="add_products_field div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                <p class="p-font_size_18px text_color-white">
                                    Pievienot
                                </p>
                            </div>
                        </button>
                    </div>
                    <div id="recipes_products_div">
                        <div class="recipes_products div_display-flex div_flex-wrap_wrap padding-top-10px_left-right-60px_botttom-30px">
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
                        </div>
                    </div>
                </div>
                <div>
                    <div class="div_display-flex">
                        <div class="padding-right-6px">
                            <h3 class="h3-size_26px font-weight_normal">GATAVOŠANAS SOĻI</h3>
                        </div>
                        <div>
                            <button class="btnShowField div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px">
                                <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px padding-top-2px">
                                    <img src="../../../img1/icon-plus.png" alt="" class="">
                                </div>
                                <div class="add_cooking_steps_field div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                    <p class="p-font_size_18px text_color-white">
                                        Pievienot
                                    </p>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div id="cooking_steps">
                        <div class="cooking_step div_display-flex">
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
                            <input type="file" class="fileInput" style="display: none;">
                            <div class="w_and_h-100_percent padding-top-20px_left-right-60px_botttom-30px">
                                <textarea class="w-100_percent_h-300px" rows="5" cols="40"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="div_display-flex">
                        <h3 class="h3-size_26px font-weight_normal padding-right-6px">PAPILDU ĒDIENU PAGATAVOŠANAS VIDEO</h3>
                        <button class="btnShowField div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px">
                            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px padding-top-2px">
                                <img src="../../../img1/icon-plus.png" alt="" class="">
                            </div>
                            <div class="div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                <p class="p-font_size_18px text_color-white">
                                    Pievienot
                                </p>
                            </div>
                        </button>
                    </div>
                    <div class="padding-top-20px_left-right-60px_botttom-30px">
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
                </div>
            </div>
            <div class="save_ready_food_btn div-position_absolute-top_0-right_0 padding-top-20px padding-right-20px">
                <button class="div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px margin-right_6px">
                    <div class="div_display-flex_justify-content-center_align-items-center cursor_pointer">
                        <p class="p-font_size_18px text_color-white">
                            Saglabāt
                        </p>
                    </div>
                </button>
            </div>
        </div>

    </div>
    <div id="recipes-name_recipesPopup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Jāizvēlās nosaukumu no ēdienu kartēm, ja nav ne viena izveidotas, tad jāizveido ēdienu karti</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>
    <div id="recipes-cooking_timePopup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Gatavošanas laika laukā jāievada vērtību</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>

    <div class="hiddenAdminIconField" style="display: none;">
        <?php include "admin-pressing_admin_icon.php"; ?>
    </div>

    <div class="hiddenBurgerMenuField" style="display: none;">
        <?php include "admin-burger_menu.php"; ?>
    </div>
</div>

<script src="../../../js1/admin/admin-burger_menu.js"></script>
<script src="../../../js1/admin/admin-pressing_admin_icon.js"></script>
<script src="../../../js1/admin/admin-ready-food_recipes-add_products.js"></script>
<script src="../../../js1/admin/admin-ready_food-recipes-food_data_check_db.js"></script>
<script src="../../../js1/admin/admin-function-ready_food-recipes-products_data_check_db.js"></script>
<script src="../../../js1/admin/admin-ready-food_recipes-add_recipes_cooking_steps.js"></script>