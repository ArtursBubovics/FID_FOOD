<?php
include('header.php');
?>

<div class="w-100_percent_h-clac_100vh-80px">
    <div class="w-100_percent_h-8_percent padding-0-3_percent">
        <div class="background_color-rgb_89_229_101 w_and_h-100_percent div_display-flex_justify-content-center_align-items-center border_none-border-radious_0px_0px_15px_15px">
            <h2 class="h2-size_40px font-weight_normal">Jūsu profils</h2>
        </div>
    </div>
    <div class="w-100_percent_h-auto padding-top-botttom-80px_left-right-150px">
        <div class="w_and_h-100_percent padding-bottom-25px">
            <div>
                <h2 class="h2-size_35px font-weight_normal">Personīgā informācija</h2>
            </div>
            <div class="div_display-flex_flex-wrap-wrap_align-content-flex-start padding-bottom-15px padding-left-65px">
                <div class="padding-right-20px w-350px_h-100_percent padding-top-10px">
                    <div>
                        <p class="p-font_size_22px">Vārds:</p>
                    </div>
                    <div>
                        <input type="fname" name="login" placeholder="Vārds" class="w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem">
                    </div>
                </div>
                <div class="padding-right-20px w-350px_h-100_percent padding-top-10px">
                    <div>
                        <p class="p-font_size_22px">Epasts:</p>
                    </div>
                    <div>
                        <input type="email" name="gmail" placeholder="Pasts" class="w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem">
                    </div>
                </div>
                <div class="padding-right-20px w-350px_h-100_percent padding-top-10px">
                    <div>
                        <p class="p-font_size_22px">Talrunis(nav obligāti):</p>
                    </div>
                    <div>
                        <input type="tel" id="phone" class="w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" name="phone" placeholder="Piemers: +371 23 145 678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                </div>
                <div class="padding-right-20px w-350px_h-100_percent padding-top-10px">
                    <div>
                        <p class="p-font_size_22px">Adrese(nav obligāti):</p>
                    </div>
                    <div>
                        <input type="text" id="address" class="w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" name="address" placeholder="Piemers: Krišjāņa Valdemāra iela">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100_percent_h-auto">
            <div>
                <h2 class="h2-size_35px font-weight_normal">Parole</h2>
            </div>
            <div class="div_display-flex_flex-wrap-wrap_align-content-flex-start padding-left-65px">
                <div class="padding-right-20px w-350px_h-100_percent padding-top-10px">
                    <div>
                        <p class="p-font_size_22px">Parole:</p>
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Parole" class="js-password-input w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem">
                    </div>
                </div>
                <div class="padding-right-20px w-350px_h-100_percent padding-top-10px">
                    <div>
                        <p class="p-font_size_22px">Apstipriniet paroli:</p>
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" placeholder="Apstipriniet paroli" class="js-password-input w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>