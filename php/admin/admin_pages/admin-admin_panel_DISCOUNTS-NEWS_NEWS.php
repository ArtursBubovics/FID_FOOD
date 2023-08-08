<?php
include('../../general/general_backend/head.php');
include "admin-header_main.php";
?>

<div class="w-100_percent_h-clac_100vh-80px div-positon_relative padding-45px">
    <div class="dicounts_news-body-content">
        <?php
        include('../../admin/admin_backend/news_take_img_for_admin.php');
        ?>
        <div id="news-change_img" class="dicounts_news-body-cell">
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
<script src="../../../js1/admin/admin-news_save_url-change_img.js"></script>
<script src="../../../js1/admin/admin-news_delete_url-change_img.js"></script>