<?php
session_start();

include('header.php');
?>

<div class="w-100_percent_h-clac_100vh-80px">
    <div class="w-100_percent_h-8_percent padding-0-3_percent">
        <div class="div-positon_relative background_color-rgb_89_229_101 w_and_h-100_percent div_display-flex_justify-content-center_align-items-center border_none-border-radious_0px_0px_15px_15px">
            <div>
                <h2 class="h2-size_40px font-weight_normal">Jūsu profils</h2>
            </div>
            <div class="div-position_absolute-top_0-left_0-right_0-bottom_0 margin-right_5_percent div_display-flex_justify-content-flex-end_align-items-center">
                <img id="logout" class="cursor_pointer" src="../../../img1/icon-logout.png" alt="">
            </div>
        </div>
    </div>
    <div class="w-100_percent_h-auto padding-top-botttom-80px_left-right-150px">
        <div class="w_and_h-100_percent padding-bottom-25px">
            <div>
                <h2 class="h2-size_35px font-weight_normal">Personīgā informācija</h2>
            </div>
            <div class="div_display-flex_flex-wrap-wrap_align-content-flex-start padding-bottom-15px padding-left-65px">
                <?php include "../../user/user_backend/user_personal_information_data_take_for_registred_user_page.php" ?>
            </div>
        </div>
        <div class="w-100_percent_h-auto">
            <div>
                <h2 class="h2-size_35px font-weight_normal">Parole</h2>
            </div>
            <div class="div_display-flex_flex-wrap-wrap_align-content-flex-start padding-left-65px">
                <?php include "../../user/user_backend/user_password_data_take_for_registred_user_page.php" ?>
            </div>
        </div>
    </div>
</div>

<script src="../../../js1/login-sign_up/user_logout.js"></script>
<script src="../../../js1/login-sign_up/check_change_fields_person_information.js"></script>