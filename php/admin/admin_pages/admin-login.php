<?php
include('../../general/general_backend/head.php');
include('admin-header_login.php');
?>


<div class="w-100_percent_h-clac_100vh-80px div_display-flex_justify-content-center_align-items-center">
    <div class="w-430px_h-430px padding-30px margin-bottom_5_percent border_1px_solid_black-border-radious_25px div_display-flex_justify-content-center_align-items-center">
        <div class="w_and_h-auto">
            <div class="w-100_percent_h-80px div_display-flex_justify-content-center_align-items-center">
                <h2 class="h2-size_35px div_text-align-center">
                    ADMIN LOGIN
                </h2>
            </div>
            <div>
                <div class="padding-bottom-15px">
                    <div class="padding-bottom-15px">
                        <input id="name_admin_login" type="fname" name="login" placeholder="Vārds" class="w-300px_h-50px padding_left">
                    </div>
                    <div class="">
                        <input id="password_admin_login" type="password" name="signin_password" placeholder="Parole" class="w-300px_h-50px padding_left">
                    </div>
                </div>

                <div class="admin_login-login_btn div_display-flex_justify-content-center_align-items-center">
                    <button type="submit" class="btn_with_white_color border_1px_solid_black-border-radious_15px padding-top-botttom-10px_left-right-15px">PIESLĒGTIES</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../js1/admin/admin-check_admin_login.js"></script>