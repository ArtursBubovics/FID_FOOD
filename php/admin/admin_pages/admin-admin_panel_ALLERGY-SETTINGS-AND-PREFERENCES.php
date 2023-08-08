<?php
include('../../general/general_backend/head.php');
include "admin-header_main.php";
?>

<div class="w-100_percent_h-clac_100vh-80px div-positon_relative padding-100px">
<div class="padding-bottom-40px">
        <div class="div_display-flex padding-left-18px">
            <div class="padding-right-12px">
                <h2 class="h2-size_35px font-weight_normal">
                    ĒDIENU KATEGORIJAS
                </h2>
            </div>
            <div id="confirm_btn_1" class="div_display-flex_justify-content-center_align-items-center">
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
                <div class="div_display-flex_justify-content-center_align-items-center padding-left-6px padding-top-2px">
                    <input type="text" id="inputField1" class="w-400px_h-30px">
                </div>
            </div>
        </div>
        <div class="div_display-flex div_flex-wrap_wrap padding-top-6px">
            <?php include('../../admin/admin_backend/food-categories_take_data_for_admin.php') ?>
        </div>
    </div>
    <div class="padding-bottom-40px">
        <div class="div_display-flex padding-left-18px">
            <div class="padding-right-12px">
                <h2 class="h2-size_35px font-weight_normal">
                    ĒDIENU ĪPAŠIBAS
                </h2>
            </div>
            <div id="confirm_btn_2" class="div_display-flex_justify-content-center_align-items-center">
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
                <div class="div_display-flex_justify-content-center_align-items-center padding-left-6px padding-top-2px">
                    <input type="text" id="inputField2" class="w-400px_h-30px">
                </div>
            </div>
        </div>
        <div class="div_display-flex div_flex-wrap_wrap padding-top-6px">
            <?php include('../../admin/admin_backend/food-settings_take_data_for_admin.php') ?>
        </div>
    </div>
    <div class="padding-bottom-40px">
        <div class="div_display-flex padding-left-18px">
            <div class="padding-right-12px">
                <h2 class="h2-size_35px font-weight_normal">
                    ALERĢIJAS IESTATĪJUMI
                </h2>
            </div>
            <div id="confirm_btn_3" class="div_display-flex_justify-content-center_align-items-center">
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
                <div class="div_display-flex_justify-content-center_align-items-center padding-left-6px padding-top-2px">
                    <input type="text" id="inputField3" class="w-400px_h-30px">
                </div>
            </div>
        </div>
        <div class="div_display-flex div_flex-wrap_wrap padding-top-6px">
            <?php include('../../admin/admin_backend/person_allergy_take_data_for_admin.php') ?>
        </div>
    </div>

    <div class="hiddenAdminIconField">
        <?php include "admin-pressing_admin_icon.php"; ?>
    </div>

    <div class="hiddenBurgerMenuField" style="display: none;">
        <?php include "admin-burger_menu.php"; ?>
    </div>
</div>

<script src="../../../js1/admin/admin-burger_menu.js"></script>
<script src="../../../js1/admin/admin-pressing_admin_icon.js"></script>
<script src="../../../js1/admin/admin-food-settings_save_data.js"></script>
<script src="../../../js1/admin/admin-person_allergy_save_data.js"></script>
<script src="../../../js1/admin/admin-food-categories_save_data.js"></script>
<script src="../../../js1/admin/admin-food-categories_delete_data.js"></script>
<script src="../../../js1/admin/admin-person_allergy_delete_data.js"></script>
<script src="../../../js1/admin/admin-food-settings_delete_data.js"></script>