<?php
include('../../general/general_backend/head.php');
include "admin-header_main.php";
?>

<div class="w_and_h-100_percent div-positon_relative padding-100px">

    <div id="cards">
        <!-- карточки -->

        <!-- карточка 1 -->
        <div class="food_card div-positon_relative border-1px_solid_black padding-top-botttom-60px_left-right-100px margin-bottom_20px">
            <div class="div_display-flex">
                <div class="padding-right-12px">
                    <h2 class="h2-size_35px font-weight_normal">1.</h2>
                </div>
                <div>
                    <h2 class="h2-size_35px font-weight_normal">EDIENS</h2>
                </div>
            </div>
            <div class="div_display-flex padding-top-20px_left-right-60px_botttom-30px">
                <div id="food_save_main_img" class="padding-right-30px">
                    <div class="ready_food-main_img border_1px_solid_black-border-radious_15px padding-20px div-positon_relative cursor_pointer">
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
                <div class="w_and_h-100_percent padding-10px">
                    <div class="margin-bottom_10px">
                        <div>
                            <p class="p-font_size_20px">NOSAUKUMS</p>
                        </div>
                        <div>
                            <input type="text" id="name" class="w-80_percent_h-30px">
                        </div>
                    </div>
                    <div class="padding-right-18px margin-bottom_10px">
                        <div>
                            <p class="p-font_size_20px">UZCRŅOJUMS</p>
                        </div>
                        <div>
                            <input type="number" min="0" id="markup" class="w-200px_h-30px">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h3 class="h3-size_26px font-weight_normal">APRAKSTS</h3>
                </div>
                <div class="padding-top-10px_left-right-60px_botttom-30px">
                    <div class="card padding-top-botttom-5px_left-right-0px">
                        <div class="card div_display-flex">
                            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                                <h3 class="h3-size_22px font-weight_normal">ĒDIENU KLASE</h3>
                            </div>
                            <button id="btnCategoriesShowField" class="div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px margin-right_6px">
                                <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px padding-top-2px">
                                    <img src="../../../img1/icon-plus.png" alt="" class="">
                                </div>
                                <div class="div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                    <p class="p-font_size_18px text_color-white">
                                        Pievienot
                                    </p>
                                </div>
                            </button>
                            <?php include "../admin_backend/food-categories_take_data_for_ready-food.php"; ?>
                        </div>
                        <div id="categoriesDivContainer" class="categories w_and_h-auto div_display-flex padding-left-18px padding-top-6px div_flex-wrap_wrap"></div>
                    </div>
                    <div class="card padding-top-botttom-5px_left-right-0px">
                        <div class="card div_display-flex">
                            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                                <h3 class="h3-size_22px font-weight_normal">ALERĢIJAS IESTATĪJUMI</h3>
                            </div>
                            <button id="btnAllergyShowField" class="div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px margin-right_6px">
                                <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px padding-top-2px">
                                    <img src="../../../img1/icon-plus.png" alt="" class="">
                                </div>
                                <div class="div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                    <p class="p-font_size_18px text_color-white">
                                        Pievienot
                                    </p>
                                </div>
                            </button>
                            <?php include "../admin_backend/person_allergy_take_data_for_ready-food.php"; ?>
                        </div>
                        <div id="allergyDivContainer" class="allergy_field w_and_h-auto div_display-flex padding-left-18px padding-top-6px div_flex-wrap_wrap"></div>
                    </div>
                    <div class="card padding-top-botttom-5px_left-right-0px">
                        <div class="div_display-flex ">
                            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                                <h3 class="h3-size_22px font-weight_normal">PREFERENCES</h3>
                            </div>
                            <button id="btnSettingsShowField" class="div_display-flex div_background-color-50c648_border-radius-5px_border-none padding-top-botttom-6px_left-right-10px margin-right_6px">
                                <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px padding-top-2px">
                                    <img src="../../../img1/icon-plus.png" alt="" class="">
                                </div>
                                <div class="div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                    <p class="p-font_size_18px text_color-white">
                                        Pievienot
                                    </p>
                                </div>
                            </button>
                            <?php include "../admin_backend/food-settings_take_data_for_ready-food.php"; ?>
                        </div>
                        <div id="settingsDivContainer" class="settings w_and_h-auto div_display-flex padding-left-18px padding-top-6px div_flex-wrap_wrap"></div>
                    </div>
                </div>
                <div>
                    <div>
                        <h3 class="h3-size_26px font-weight_normal">PAPILDU ĒDIENU FOTO</h3>
                    </div>
                    <div class="food_save_extra_img padding-top-20px_left-right-60px_botttom-30px">
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
                    <input type="file" class="extraImgFileInput" style="display: none;">
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

        <!-- карточка 2 -->
        <div>

        </div>

    </div>

    <div id="ready-food-admin_Popup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Ievadiet visus laukus un ievietojiet attēlus</p>
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
    
    <div id="ready_food-admin-main_img-popup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Galvenajā logā ir jāievieto attēls</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>
    <div id="ready_food-admin-fields-popup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Visi lauki ir jāievada, tie nedrīkst būt tukši</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>
    <div id="ready_food-admin-descriptions_fields-popup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Aprakstā ĒDIENU KLASE un ALERĢIJAS IESTATĪJUMI ir jābūt vismaz vienam laukam</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>
    <div id="ready_food-admin-descriptions_foto-popup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Papildu fotoattēliem jābūt 3</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>
</div>

<script src="../../../js1/admin/admin-burger_menu.js"></script>
<script src="../../../js1/admin/admin-pressing_admin_icon.js"></script>
<script src="../../../js1/admin/admin-ready_food-food_data_check_db.js"></script>
<script src="../../../js1/admin/admin-ready_food-food_data_save_db.js"></script>
<script src="../../../js1/admin/admin-food-settings_delete_ready_food_food_data.js"></script>
<script src="../../../js1/admin/admin-food-categories_take_data_for_ready-food_adding.js"></script>
<script src="../../../js1/admin/admin-food-settings_take_data_for_ready-food_adding.js"></script>
<script src="../../../js1/admin/admin-person_allergy_take_data_for_ready-food_adding.js"></script>
<script src="../../../js1/admin/admin-food_img_save_for_ready-food_page.js"></script>
<script src="../../../js1/admin/admin-food_extra_img_save_for_ready-food_page.js"></script>
<script src="../../../js1/admin/admin-food-categories_delete_ready_food_food_data.js"></script>
<script src="../../../js1/admin/admin-food-allergy_delete_ready_food_food_data.js"></script>
<script src="../../../js1/admin/admin-function-ready-food_take_ready-food_categories_save.js"></script>
<script src="../../../js1/admin/admin-function-ready-food_take_ready-food_allergy_save.js"></script>
<script src="../../../js1/admin/admin-function-ready-food_take_ready-food_settings_save.js"></script>
<script src="../../../js1/admin/admin-function-ready-food_take_ready-food_extra_img_save.js"></script>
<script src="../../../js1/admin/admin-function-create_ready-food_cards.js"></script>