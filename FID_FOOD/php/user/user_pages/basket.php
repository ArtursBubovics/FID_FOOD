<?php
include('header.php');
?>

<body class="div-positon_relative">
    <div class="w-100_percent_h-clac_100vh-80px padding-top-botttom-80px_left-right-150px">
        <div>
            <h2 class="h2-size_40px font-weight_normal">Pasūtījuma noformēšana</h2>
        </div>
        <div class="div-positon_relative padding-top-35px">
            <div id="obligatory_registration_inscription" class="w-auto_h-40px div_display-flex div-position_absolute-top_0-right_0 padding-right-12px padding-top-35px">
                <div class="padding-right-3px div_display-flex_justify-content-center_align-items-center h-100_percent div_text-align-center">
                    <img src="../../../img1/icon-important.png" alt="">
                </div>
                <div class="padding-right-6px div_display-flex_justify-content-center_align-items-center">
                    <p class="p-font_size_22px">Lai veiktu pasūtījumu, jums ir jāpiesakās vietnē:</p>
                </div>
                <div class="div_display-flex_justify-content-center_align-items-center">
                    <a href="login-sign_up.php" class="text-decoration-none">
                        <button class="main_btn_with_other_color">
                            <p class="p-font_size_20px text_color-white padding-5px">Pieslēgties</p>
                        </button>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="h3-size_24px font-weight_normal">Grozs</h3>
            </div>
            <div class="padding-top-6px">
                <table class="w_and_h-100_percent border_style-none_border_collapse-collapse">
                    <tr>
                        <th></th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Produkts</h3>
                        </th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Ēdiena izvēlne</h3>
                        </th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Daudzums</h3>
                        </th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Dienu skaits</h3>
                        </th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Piegādes datums</h3>
                        </th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Piegādes laiks</h3>
                        </th>
                        <th>
                            <h3 class="h3-size_20px font-weight_normal text_color-light_gray">Cena</h3>
                        </th>
                        <th></th>
                    </tr>
                    <tr class="border_bottom-1px_solid_50c648">
                        <td class="div_text-align-center"><img src="../../../img1/basket-img-1.PNG" alt=""></td>
                        <td class="div_text-align-center">
                            <p class="p-font_size_20px">2000 cal / 4 ēdieni / 30€ diena</p>
                        </td>
                        <td class="div_text-align-center">
                            <button class="main_btn padding-top-botttom-6px_left-right-10px div_display-flex_justify-content-center_align-items-center margin-0-auto">
                                <p class="text_color-white p-font_size_18px p-font_size_15px">Apskatīt</p>
                            </button>
                        </td>
                        <td class="div_text-align-center">
                            <p class="p-font_size_20px">1</p>
                        </td>
                        <td class="div_text-align-center">
                            <p class="p-font_size_20px">1</p>
                        </td>
                        <td class="div_text-align-center ">
                            <p class="p-font_size_20px">06.05.23</p>
                        </td>
                        <td class="div_text-align-center">
                            <p class="p-font_size_20px">9.00</p>
                        </td>
                        <td class="div_text-align-center">
                            <p class="p-font_size_20px">0€</p>
                        </td>
                        <td class="div_text-align-center">
                            <img class="cursor_pointer w_and_h-20px" src="../../../img1/image_delete.png" alt="">
                        </td>
                    </tr>
                </table>
                <div class="div-positon_relative">
                    <div class="padding-top-20px">
                        <div class="div_display-flex_justify-content-flex-end_align-items-center padding-right-12px">
                            <div class="padding-right-6px">
                                <p class="p-font_size_20px">Kopējā pasūtījuma summa:</p>
                            </div>
                            <div>
                                <p class="p-font_size_18px text_color-green">4444444440€</p>
                            </div>
                        </div>
                        <div class="div_display-flex_justify-content-flex-end_align-items-center padding-right-12px padding-top-20px">
                            <button id="order_btn" class="main_btn_with_other_color w-300px_h-auto padding-top-botttom-10px_left-right-15px">
                                <p class="fourth_btn_text_style">Noformēt pasūtījumu</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="last_step_of_registration" class="black_over_screen-100_percent div_display-flex_justify-content-center_align-items-center div-positon_relative">
            <div class="w-25_percent_h-50_percent background_color-white border_none-border-radious_15px div-positon_relative padding-45px">
                <div>
                    <h2 class="h2-size_35px font-weight_normal">Pēdējais solis</h2>
                </div>
                <div class="padding-bottom-6px padding-top-20px padding-left-35px">
                    <div>
                        <p class="p-font_size_22px padding-bottom-2px">Talrunis: </p>
                    </div>
                    <div class="padding-left-20px">
                        <input type="tel" id="phone" class="w-70_percent_h-50px padding_left" name="phone" placeholder="Piemers: +371 23 145 678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                </div>
                <div class="padding-left-35px padding-top-4px padding-bottom-6px">
                    <div>
                        <p class="p-font_size_22px padding-bottom-2px">Adrese: </p>
                    </div>
                    <div class="padding-left-20px">
                        <input type="text" id="address" class="w-70_percent_h-50px padding_left" name="address" placeholder="Piemers: Krišjāņa Valdemāra iela">
                    </div>
                </div>
                <div class="padding-left-35px padding-top-4px">
                    <div>
                        <p class="p-font_size_22px padding-bottom-2px">Papildinājums(nav obligāti): </p>
                    </div>
                    <div class="padding-left-20px">
                        <input type="text" id="address" class="w-70_percent_h-50px padding_left" name="address">
                    </div>
                </div>
                <div class="padding-top-25px div_display-flex_justify-content-center_align-items-center">
                    <button id="btn_confirm_the_order" class="main_btn_with_white_color btn_with_white_color w-200px_h-40px border_1px_solid_black-border-radious_15px">
                        <p>Apstiprināt</p>
                    </button>
                </div>
                <div class="div-position_absolute-top_0-right_0 padding-top-20px padding-right-20px">
                    <img src="../../../img1/image_delete.png" id="basket-last_registration_close_btn" class="cursor_pointer" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
        <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
            <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
                <img src="../../../img1/icon-info.png" alt="">
            </div>
            <div>
                <p class="p-font_size_22px padding-right-1px">Maksājums veikts veiksmīgi</p>
            </div>
            <div>
                <p class="p-font_size_22px">!</p>
            </div>
        </div>
    </div>

    <script src="../../../js1/basket/basket-checkout_button.js"></script>
    <script src="../../../js1/basket/basket-last_registration_step.js"></script>
    <script src="../../../js1/basket/basket-close_window.js"></script>
    <script src="../../../js1/basket/basket-btn_confirm_the_order.js"></script>
    <script src="../../../js1/basket/basket-popup.js"></script>
</body>