<?php
include('../../general/general_backend/head.php');
include('admin-header_login.php');
?>


<div class="w-100_percent_h-clac_100vh-80px div_display-flex_justify-content-center_align-items-center">
    <div class="w-430px_h-430px padding-30px margin-bottom_5_percent border_1px_solid_black-border-radious_25px div_display-flex_justify-content-center_align-items-center">
        <div class="w_and_h-auto">
            <div>
                <h2 class="h2-size_35px div_text-align-center">
                    ADMIN LOGIN
                </h2>
            </div>
            <div>
                <form class="login-sign_up_content">
                    <input type="fname" name="login" placeholder="Vārds" class="w-300px_h-50px padding_left">
                    <input type="password" name="signin_password" placeholder="Parole" class="js-password-input w-300px_h-50px padding_left">
                    <p class="msg-login none">Проверьте правильность полей</p>
                    <div class="login-sign_up_button">
                        <button type="submit" class="btn_with_white_color border_1px_solid_black-border-radious_15px padding-top-botttom-10px_left-right-15px">PIESLĒGTIES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>











<!-- <header class="admin_login-header">
    <div class="admin_login-header-container">
        <div class="admin_login-header-icon">
            <a href="index.php"><img src="../../../img1/home_icon.png" alt=""></a>
        </div>
    </div>
</header> -->
<!-- <div class="admin-login">
    <div class="admin-login-content">
        <div class="sign-up">
            <div class="sign-up_title">
                <div class="title_name">
                    <h3 class="h3-size_25px">ADMINISTRĀTORU PIESLĒGŠANA</h3>
                </div>
            </div>
            <div >
                <form  class="login-sign_up_content">
                <input type="fname" name="admin_sign_in_name" placeholder="Vārds" class="auth-input padding_left" >
                <input type="password" name="admin_sign_up_password_1" placeholder="Parole" class="js-password-input auth-input padding_left" >
                <p class="msg-admin-login none"></p>          
                <div class="login-sign_up_button">
                    <button class="btn login-admin-button">PIESLĒGTIES</button>
                </div>
                </form>
            </div>
        </div>          
    </div>
</div> -->

<script src="../../../js1/admin-login.js"></script>