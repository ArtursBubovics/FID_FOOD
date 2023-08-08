<!-- HEADER -->

<?php
include('header.php');
?>

<body class="div-positon_relative">
<div class="izvelne">
    <div class="izvelne-container">
        <div class="izvelne-container-header">
            <h2 class="h2_izvelne_main_header">Gatavu ēdiena pasūtīšana</h2>
        </div>
        <div class="izvelne-container-body">
            <div class="izvelne-container-body-container">
                <div class="izvelne-container-body-container-return_box">
                    <div class="izvelne-container-body-container-return_box-container">
                        <div class="izvelne-container-body-container-return_box-container-h3">
                            <h3 class="izvelne-container-body-h3">Jūsu izvele:</h3>
                        </div>
                        <div class="izvelne-container-body-container-return_box-container-selected_product_and_price">
                            <div class="izvelne-container-body-container-return_box-container-selected_product_and_product_price-selected_product">
                                <p class="izvelne-return_box-p padding-right-3px" id="calorie_count">2000</p>
                                <p class="izvelne-return_box-p padding-right-3px"> kcal,</p>

                                <p class="izvelne-return_box-p padding-right-3px" id="return-slider-value"></p>
                                <p class="izvelne-return_box-p" id="return-slider-day"> diena</p>
                                <p class="izvelne-return_box-p" id="return-slider-days"> dienas</p>
                            </div>
                            <div class="izvelne-container-body-container-return_box-container-selected_product_and_product_price-selected_product_price">
                                <p id="price_per_day" class="izvelne-return_box-p">40</p>
                                <p class="izvelne-return_box-p">€</p>
                                <p class="izvelne-return_box-p">/diena</p>
                            </div>
                        </div>
                        <div class="izvelne-container-body-container-return_box-container-discounts">
                            <div class="izvelne-container-body-container-return_box-container-discounts-container">
                                <div class="izvelne-container-body-container-return_box-container-discounts-container-discount">
                                    <p class="izvelne-return_box-p">Promokods fidfood24: </p>
                                    <p class="izvelne-return_box-p">-10%</p>
                                </div>
                                <div class="izvelne-container-body-container-return_box-container-discounts-container-discount">
                                    <p class="izvelne-return_box-p">Galīgā atlaide: </p>
                                    <p class="izvelne-return_box-p">-10%</p>
                                </div>
                            </div>
                        </div>
                        <div class="izvelne-container-body-container-return_box-container-without_discount_and_benefit">
                            <div class="izvelne-container-body-container-return_box-container-without_discount_and_benefit-container">
                                <div class="izvelne-container-body-container-return_box-container-without_discount_and_benefit-container-without_discount">
                                    <p class="izvelne-return_box-p padding-right-3px">Bez atlaides: </p>
                                    <p class="izvelne-return_box-p text-decoration_line_through">40</p>
                                    <p class="izvelne-return_box-p text-decoration_line_through">€</p>
                                </div>
                                <div class="izvelne-container-body-container-return_box-container-without_discount_and_benefit-container-benefit">
                                    <p class="izvelne-return_box-p padding-right-3px">Ieguvums: </p>
                                    <p class="izvelne-return_box-p">36</p>
                                    <p class="izvelne-return_box-p">€</p>
                                </div>
                            </div>
                        </div>
                        <div class="izvelne-container-body-container-return_box-container-btn_to_order_and_add_to_basket">
                            <div class="izvelne-container-body-container-return_box-container-btn_to_order_and_add_to_basket-container">
                                <div class="izvelne-container-body-container-return_box-container-btn_to_order_and_add_to_basket-container-btn_order">
                                    <button id="btn_confirm_the_order-ready_food" class="izvelne-btn_order">
                                        <p class="first_btn_text_style padding-right-3px">
                                            PASŪTĪT PAR
                                        </p>
                                        <p id="final_discounted_price" class="first_btn_text_style padding-right-3px">
                                            32
                                        </p>
                                        <p class="first_btn_text_style">
                                            €
                                        </p>
                                    </button>
                                </div>
                                <div class="izvelne-container-body-container-return_box-container-btn_to_order_and_add_to_basket-container-btn_add_to_basket">
                                    <button id="add_btn_in_basket" class="izvelne-btn_add_to_basket main_btn">
                                        <p class="second_btn_text_style">
                                            IELIKT GROZĀ
                                        </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="izvelne-container-body-container-return_box-settings">
                        <img id="izvelne-additional_settings-img" src="../../../img1/icon_settings.png" alt="">
                    </div>
                </div>
                <div class="izvelne-container-body-container-menu">
                    <div class="izvelne-container-body-container-menu-container">
                        <div class="izvelne-container-body-container-menu-container-calories_and_nutrition_settings">
                            <div class="izvelne-btns_calories">
                                <div class="izvelne-btns_calories-container">
                                    <div class="izvelne-btns_calories-container">
                                        <div class="izvelne-btns_calories-container-calories">
                                            <p class="izvelne-menu-p">500</p>
                                        </div>
                                        <div class="izvelne-btns_calories-container-calories">
                                            <p class="izvelne-menu-p">1000</p>
                                        </div>
                                        <div class="izvelne-btns_calories-container-calories">
                                            <p class="izvelne-menu-p">1500</p>
                                        </div>
                                        <div class="izvelne-btns_calories-container-calories izvelne-btns_calories-container-calories-selected">
                                            <p class="izvelne-menu-p izvelne-menu-p-selected">2000</p>
                                        </div>
                                        <div class="izvelne-btns_calories-container-calories">
                                            <p class="izvelne-menu-p">2500</p>
                                        </div>
                                        <div class="izvelne-btns_calories-container-calories">
                                            <p class="izvelne-menu-p">3000</p>
                                        </div>
                                        <div class="izvelne-btns_calories-container-calories">
                                            <p class="izvelne-menu-p">3500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="izvelne-btn_nutrition_settings">
                                <div class="izvelne-btn_nutrition_settings-container">
                                    <button class="izvelne-btn_nutrition_settings-container-btn_div-btn" id="izvelnes_iestatijumi-settings_btn">
                                        <div class="izvelne-btn_nutrition_settings-container-btn_div-btn-img">
                                            <img src="../../../img1/icons-settings_slider.png" alt="">
                                        </div>
                                        <div class="izvelne-btn_nutrition_settings-container-btn_div-btn-text">
                                            <p class="izvelne-menu-p izvelne-btn_nutrition_settings-container-btn_div-btn-text_color">
                                                Izvēlnes iestatījumi</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="izvelne-container-body-container-menu-container-menu_calendar margin_top-15px">
                            <div class="izvelne-container-body-container-menu-container-menu_calendar-container div_display-flex_justify-content-center_align-items-center">
                                <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-prevSlide_nextSlide">
                                    <button class="izvelne-prevSlide_nextSlide-prev_button img_in_izvelne_prevSlide_nextSlide-prev_button-center 
                                    menu_calendar-prevSlide_nextSlide" id="left_btn_slide_show_days">
                                        <img class="izvelne-prevSlide_nextSlide-selected_img" id="left_btn_slide_show_days_img" src="../../../img1/icons_less-than_left.png" alt="">
                                    </button>
                                </div>
                                <div class="slider">
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn izvelne-menu_calendar-container-prevSlide_nextSlide-selected ">
                                            <p class="izvelne-menu-menu_calendar-p izvelne-menu-p-selected"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn margin_left_right_10px">
                                        <button class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-btn">
                                            <p class="izvelne-menu-menu_calendar-p"></p>
                                        </button>
                                    </div>
                                </div>
                                <div class="izvelne-container-body-container-menu-container-menu_calendar-container-div_btn-prevSlide_nextSlide">
                                    <button class="izvelne-prevSlide_nextSlide-next_button img_in_izvelne_prevSlide_nextSlide-prev_button-center" id="right_btn_slide_show_days">
                                        <img src="../../../img1/icons_more-than_right.png" id="right_btn_slide_show_days_img" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="izvelne-container-body-container-menu-container-menu">
                            <div class="izvelne-container-body-container-menu-container-menu-container">

                                <!-- 
                                  нужно  
                                <div
                                    class="izvelne-container-body-container-menu-container-menu-container-prevSlide_nextSlide">
                                    <button class="izvelne-prevSlide_nextSlide-prev_button img_in_izvelne_prevSlide_nextSlide-prev_button-center 
                                    menu_calendar-prevSlide_nextSlide">
                                        <img class="izvelne-prevSlide_nextSlide-selected_img"
                                            src="../../../img1/icons_less-than_left.png" alt="">
                                    </button>
                                </div> -->
                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards">
                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container">
                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card margin_left_right_10px" data-div="1">
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container">
                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-header">
                                                    <h3 class="izvelne-menu-menu_cards-card-header-h3">1. ĒDIENS</h3>
                                                </div>
                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-body">
                                                    <img class="menu_cards-card-img" src="../../../img1/image-svaigi_spiesta_apelsīnu_sula(300ml).PNG" alt="">
                                                </div>
                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs">
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-name">
                                                        <h3 class="izvelne-menu-menu_cards-card-header-h3_dish div_text-align-center">Svaigi spiesta apelsīnu sula(300ml)</h3>
                                                    </div>
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs">
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                Cal</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p calorie_count padding-right-6px">
                                                            150 /</p>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                Ol</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p protein_count padding-right-6px">
                                                                0.4</p>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                T</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p amount_of_fat padding-right-6px">
                                                                1.1</p>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                Og</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p carbohydrate_count padding-right-6px">
                                                                3.2</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change">
                                                <button class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change-btn cursor_pointer">
                                                    <img src="../../../img1/image_change.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card margin_left_right_10px" data-div="2">
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container">
                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-header">
                                                    <h3 class="izvelne-menu-menu_cards-card-header-h3">2. ĒDIENS</h3>
                                                </div>
                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-body">
                                                    <img class="menu_cards-card-img" src="../../../img1/image-veselīga_dārzeņu_zupa.png" alt="">
                                                </div>
                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs">
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-name">
                                                        <h3 class="izvelne-menu-menu_cards-card-header-h3_dish div_text-align-center">Veselīga_dārzeņu_zupa</h3>
                                                    </div>
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs">
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                Cal</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p calorie_count padding-right-6px">
                                                            460 /</p>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                Ol</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p protein_count padding-right-6px">
                                                            1.5</p>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                T</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p amount_of_fat padding-right-6px">
                                                            0.9</p>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                Og</p>
                                                            <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p carbohydrate_count padding-right-6px">
                                                                2.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change">
                                                <button class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change-btn cursor_pointer">
                                                    <img src="../../../img1/image_change.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card margin_left_right_10px" data-div="3">
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container">

                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container">
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-header">
                                                        <h3 class="izvelne-menu-menu_cards-card-header-h3">3. ĒDIENS
                                                        </h3>
                                                    </div>
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-body">
                                                        <img class="menu_cards-card-img" src="../../../img1/image-borščs.PNG" alt="">
                                                    </div>
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs">
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-name">
                                                            <h3 class="izvelne-menu-menu_cards-card-header-h3_dish div_text-align-center">
                                                            Borščs</h3>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs">
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    Cal</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p calorie_count padding-right-6px">
                                                                357 /</p>
                                                            </div>
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    Ol</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p protein_count padding-right-6px">
                                                                    5.9</p>
                                                            </div>
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    T</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p amount_of_fat padding-right-6px">
                                                                    6.1</p>
                                                            </div>
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    Og</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p carbohydrate_count padding-right-6px">
                                                                    7.1</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change">
                                                <button class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change-btn cursor_pointer">
                                                    <img src="../../../img1/image_change.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <!-- <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card margin_left_right_10px" data-div="4">
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container">

                                                <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container">
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-header">
                                                        <h3 class="izvelne-menu-menu_cards-card-header-h3">4. ĒDIENS
                                                        </h3>
                                                    </div>
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-body">
                                                        <img class="menu_cards-card-img" src="../../../img1/image-maizes_zupa_ar_putukrējumu.PNG" alt="">
                                                    </div>
                                                    <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs">
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-name">
                                                            <h3 class="izvelne-menu-menu_cards-card-header-h3_dish div_text-align-center">
                                                                Maizes zupa ar putukrējumu</h3>
                                                        </div>
                                                        <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs">
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    Cal</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p calorie_count padding-right-6px">
                                                                    318 /</p>
                                                            </div>
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    Ol</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p protein_count padding-right-6px">
                                                                    1.4</p>
                                                            </div>
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    T</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p amount_of_fat padding-right-6px">
                                                                    0.5</p>
                                                            </div>
                                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-container-name_and_pfs-pfs-name_and_quantity">
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p padding-right-3px">
                                                                    Og</p>
                                                                <p class="izvelne-menu_cards-name_and_pfs-body-name_and_quantity-p carbohydrate_count padding-right-6px">
                                                                    4.0</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change">
                                                <button class="izvelne-container-body-container-menu-container-menu-container-menu_cards-container-menu-card-btn_change-btn cursor_pointer">
                                                    <img src="../../../img1/image_change.png" alt="">
                                                </button>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days">
                            <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days-a_slider_for_the_number_of_days">
                                <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days-a_slider_for_the_number_of_days-conatainer">
                                    <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days-a_slider_for_the_number_of_days-conatainer-name_and_enterDay">
                                        <div class="izvelne-menu-name_and_enterDay-name">
                                            <h4 class="enter_retrun_days_h4">DIENU SKAITS</h4>
                                        </div>
                                        <div class="izvelne-menu-name_and_enterDay-enterDay">
                                            <div class="izvelne-menu-name_and_enterDay-enterDay-first_part_h4">
                                                <h4 class="enter_retrun_days_h4">IEVADIET</h4>
                                            </div>
                                            <div class="izvelne-menu-name_and_enterDay-enterDay-dropDownBtn-enter_retrun_days">
                                                <button class="izvelne-menu-name_and_enterDay-enterDay-enter_retrun_days">
                                                    <div class="izvelne-menu-name_and_enterDay-enterDay-enter_retrun_days-firstValueDropdown">
                                                        <div class="izvelne-menu-name_and_enterDay-enterDay-enter_retrun_days-text padding-right-6px">
                                                            <p class="enter_retrun_days_p" id="enter_retrun_days_p-dropdown_btn">0</p>
                                                        </div>
                                                        <div class="izvelne-menu-name_and_enterDay-enterDay-enter_retrun_days-img">
                                                            <img src="../../../img1/arrow-down-sign-to-navigate.png" class="w_and_h-12px" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="izvelne-menu-name_and_enterDay-enterDay-enter_retrun_days-dropdownContent" id="dropDownDays">
                                                        <ul id="menu">
                                                            <li class="izvelne-dropdownContent-li padding-bottom-4px padding-top-6px">
                                                                <p class="enter_retrun_days_p">1</p>
                                                            </li>
                                                            <li class="izvelne-dropdownContent-li padding-bottom-4px">
                                                                <p class="enter_retrun_days_p">3</p>
                                                            </li>
                                                            <li class="izvelne-dropdownContent-li padding-bottom-4px">
                                                                <p class="enter_retrun_days_p">5</p>
                                                            </li>
                                                            <li class="izvelne-dropdownContent-li padding-bottom-4px">
                                                                <p class="enter_retrun_days_p">7</p>
                                                            </li>
                                                            <li class="izvelne-dropdownContent-li padding-bottom-4px">
                                                                <p class="enter_retrun_days_p">14</p>
                                                            </li>
                                                            <li class="izvelne-dropdownContent-li padding-bottom-6px">
                                                                <p class="enter_retrun_days_p">28</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </button>

                                            </div>
                                            <div class="izvelne-menu-name_and_enterDay-enterDay-second_part_h4">
                                                <h4 class="enter_retrun_days_h4">DIENAS</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days-a_slider_for_the_number_of_days-conatainer-dayRange">
                                        <input type="range" min="1" max="100" value="50" class="slider" id="dayRange">
                                    </div>
                                    <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days-a_slider_for_the_number_of_days-conatainer-div_btn">
                                        <button class="izvelne-menu-a_slider_for_the_number_of_days-div_btn-btn">
                                            <p class="izvelne-menu-a_slider_for_the_number_of_days-div_btn-btn-day_number_p" id="slider-value">0</p>
                                            <p class="third_btn_text_style">
                                                DIENAS</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="izvelne-container-body-container-menu-container-output_proteins_fats_carbohydrates_and_a_slider_for_the_number_of_days-output_proteins_fats_carbohydrates">
                                <div class="izvelne-output_proteins_fats_carbohydrates">
                                    <div class="output_proteins_fats_carbohydrates-name padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-name-p">CAL</p>
                                    </div>
                                    <div class="output_proteins_fats_carbohydrates-number padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-number-p" id="return_cal">12</p>
                                    </div>
                                </div>
                                <div class="izvelne-output_proteins_fats_carbohydrates">
                                    <div class="output_proteins_fats_carbohydrates-name padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-name-p">OLBALTUMVIELAS</p>
                                    </div>
                                    <div class="output_proteins_fats_carbohydrates-number padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-number-p" id="return_proteins">12</p>
                                    </div>
                                </div>
                                <div class="izvelne-output_proteins_fats_carbohydrates">
                                    <div class="output_proteins_fats_carbohydrates-name padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-name-p">TAUKI</p>
                                    </div>
                                    <div class="output_proteins_fats_carbohydrates-number padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-number-p" id="return_fats">12</p>
                                    </div>
                                </div>
                                <div class="izvelne-output_proteins_fats_carbohydrates">
                                    <div class="output_proteins_fats_carbohydrates-name padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-name-p">OGĻHIDRĀTI</p>
                                    </div>
                                    <div class="output_proteins_fats_carbohydrates-number padding-10px">
                                        <p class="output_proteins_fats_carbohydrates-number-p" id="return_carbohydrates">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="black_over_screen-100_percent div_display-flex_justify-content-center_align-items-center">
        <div class="div-positon_relative background_color-white w-1300px_h-800px div-border_radius-border_none-box_shadow_1px_1px_0px_1px_rgba-0_0_0_02">
            <div class="w_and_h-100_percent padding-50px-80px-50px">
                <div class="w-100_percent_h-50px">
                    <h2 class="h2-size_40px font-weight_normal">Ēdiena aizstāšana</h2>
                </div>
                <div class="w_and_h-100_percent div_display-flex_flex-wrap-wrap_align-content-flex-start padding-top-20px div_overflow-auto">
                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="1">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-borščs.PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Borščs</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>

                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="2">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-cēzara_salāts_ar_vistas_krūtiņu.PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Cēzara salāts ar vistas krūtiņu</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>
                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="3">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-poke_bļodas_ar_ceptu_lasi.PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Poke bļodas ar ceptu lasi</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>
                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="4">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-veselīga_dārzeņu_zupa.PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Veselīga dārzeņu zupa</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>
                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="5">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-pankūkas_ar_ievārījumu(2 gab).PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Pankūkas ar ievārījumu</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>
                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="6">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-vaniļa_panna_cotta_ar_zemeņu_mērci.PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Vaniļa panna cotta ar zemeņu mērci</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>
                    <div class="card-popup-div w_clac_100_percent_devide_4-h_auto padding-bottom-15px" data-popup-div="7">
                        <div class="w-220px_h-220px margin-0-auto div-positon_relative">
                            <img class="w_and_h-100_percent object-fit_contain cursor_pointer" src="../../../img1/image-šokolādes_krēms_ar_ķīseli.PNG" alt="">
                            <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px cursor_pointer">
                                <img src="../../../img1/icon-info.png" alt="">
                            </div>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center padding-top-6px padding-bottom-4px">
                            <p class="p-font_size_22px div_text-align-center">Šokolādes krēms ar ķīseli</p>
                        </div>
                        <div class="w_and_h-auto div_display-flex_justify-content-center_align-items-center">
                            <button class="main_btn div_display-flex_justify-content-center_align-items-center padding-top-botttom-3px_left-right-8px">
                                <p class="card_replacement_btn third_btn_text_style">Aizvietot</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-position_absolute-top_0-right_0 padding-right-30px padding-top-35px cursor_pointer" id="delete_btn_for_food_cards_window">
                <img src="../../../img1/image_delete.png" alt="">
            </div>
        </div>

    </div>
    <div class="izvelnes_iestatijumi-settings_div">
        <div class="izvelnes_iestatijumi-settings-right_return_div padding-30px" id="delivery_settings">
            <div class="izvelnes_iestatijumi-settings-right_return_div-header">
                <div class="izvelnes_iestatijumi-settings-right_return_div-header-h2">
                    <h2 class="h2-size_30px font-weight_normal">Piegādes iestatījumi</h2>
                </div>
                <div class="izvelnes_iestatijumi-settings-right_return_div-header-img">
                    <img src="../../../img1/image_delete.png" alt="">
                </div>
            </div>
            <div class="izvelnes_iestatijumi-settings-body padding-8px_0px_8px_2px-margin-15px_0px">
                <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group">
                    <div class="div_display-flex padding-left-6px">
                        <div class="h_div padding-right-6px">
                            <h3 class="h3-size_25px font-weight_normal">Cilvēku skaits: </h3>
                        </div>
                        <div id="dropDownPortionNumberBtn" class="div-positon_relative">
                            <div class="div_background-color-50c648_border-radius-5px_border-none w_and_h-30px div_display-flex_justify-content-center_align-items-center cursor_pointer">
                                <p class="p-font_size_20px text_color-white" id="number_of_people_to_count_portions">1</p>
                            </div>
                            <div class="izvelne-menu-name_and_enterDay-enterDay-enter_retrun_portion_number-dropdownContent" id="dropDownPortionNumber">
                                <ul>
                                    <li class="izvelne-dropdownContent-li padding-bottom-4px padding-top-6px cursor_pointer">
                                        <p class="p-font_size_20px text_color-white">1</p>
                                    </li>
                                    <li class="izvelne-dropdownContent-li padding-bottom-4px cursor_pointer">
                                        <p class="p-font_size_20px text_color-white">2</p>
                                    </li>
                                    <li class="izvelne-dropdownContent-li padding-bottom-4px cursor_pointer">
                                        <p class="p-font_size_20px text_color-white">3</p>
                                    </li>
                                    <li class="izvelne-dropdownContent-li padding-bottom-4px cursor_pointer">
                                        <p class="p-font_size_20px text_color-white">4</p>
                                    </li>
                                    <li class="izvelne-dropdownContent-li padding-bottom-4px cursor_pointer">
                                        <p class="p-font_size_20px text_color-white">5</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dividing_line"></div>
            </div>
            <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group">
                <div class="h_div padding-right-6px padding-left-6px padding-bottom-6px">
                    <h3 class="h3-size_25px font-weight_normal">Piegādes datums: </h3>
                </div>
                <form class="div_display-flex_justify-content-center_align-items-center">
                    <input type="text" id="datepicker" class="w-50_percent-h_auto p-font_size_18px input_cneter">
                </form>
            </div>
        </div>

        <div class="black_transparent_background-75_percent"></div>

        <div class="izvelnes_iestatijumi-settings-right_return_div padding-30px" id="preference_settings">
            <div class="izvelnes_iestatijumi-settings-right_return_div-header">
                <div class="izvelnes_iestatijumi-settings-right_return_div-header-h2">
                    <h2 class="h2-size_30px font-weight_normal">Izvēlnes iestatījumi</h2>
                </div>
                <div class="izvelnes_iestatijumi-settings-right_return_div-header-img">
                    <img src="../../../img1/image_delete.png" alt="">
                </div>
            </div>
            <div class="izvelnes_iestatijumi-settings-body padding-8px_0px_8px_2px-margin-15px_0px">
                <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group">
                    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-top">
                        <h3 class="h3-size_25px font-weight_normal">Atlasiet Iestatījumi</h3>
                    </div>
                    <div class="dividing_line"></div>
                    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom padding-top-12px padding-left-6px">
                        <?php include('../../user/user_backend/food-settings_take_data_for_user.php') ?>
                    </div>
                </div>
            </div>
            <div class="izvelnes_iestatijumi-settings-body padding-8px_0px_8px_2px-margin-15px_0px">
                <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group">
                    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-top">
                        <h3 class="h3-size_25px font-weight_normal">Likvidējiet alergēnus</h3>
                    </div>
                    <div class="dividing_line"></div>
                    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-center"></div>
                    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom padding-top-12px padding-left-6px">
                        <?php include('../../user/user_backend/person_allergy_take_data_for_user.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues" id="installation_on_the_right-bottom_side_of_the_screen">
            <div class="izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues-container padding-10px">
                <div class="izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues-container-btns_div">
                    <button class="izvelne-saveAndDeleteValues-btn-save main_btn" id="izvelne-btn-save-changes">
                        <p class="fourth_btn_text_style">LIETOT IESTATĪJUMUS</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="last_step_of_registration_in_izvelne" class="black_over_screen-100_percent div_display-flex_justify-content-center_align-items-center div-positon_relative">
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
<div id="izvelnePopup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
    <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
        <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
            <img src="../../../img1/icon-info.png" alt="">
        </div>
        <div>
            <p class="p-font_size_22px padding-right-1px">Lai samaksātu, ir jāreģistrējas vai jāpiesakās savā kontā</p>
        </div>
        <div>
            <p class="p-font_size_22px">!</p>
        </div>
    </div>
</div>
<div id="izvelneDeliverySettingsPopup" class="popup  w-100_percent_h-10_percent div-position_absolute div_display-flex_justify-content-center_align-items-center ">
    <div class="w_and_h-auto padding-20px background_color-white div-border_radius-border_none-box_shadow_0px_0px_0px_1px_rgba-0_0_0_06 z-index_10 div_display-flex_justify-content-center_align-items-center">
        <div class="div_display-flex_justify-content-center_align-items-center padding-right-6px">
            <img src="../../../img1/icon-info.png" alt="">
        </div>
        <div>
            <p class="p-font_size_22px padding-right-1px">Lai pievienotu pasūtījumu grozam vai uzreiz apmaksātu pasūtījumu, Jums "Piegādes iestatījumi" jāizvēlas pasūtījuma datums un laiksā</p>
        </div>
        <div>
            <p class="p-font_size_22px">!</p>
        </div>
    </div>
</div>

<!-- Slick Slider -->
<script type="text/javascript" src="../../../js1/slick/slick.min.js"></script>

<!-- Air datepicker -->
<script src="https://cdn.jsdelivr.net/npm/air-datepicker/dist/js/datepicker.min.js"></script>

<script src="../../../js1/izvelne/izvelne-dropdown-btn-days.js"></script>
<script src="../../../js1/izvelne/izvelne-dropdown-btn-portion_number.js"></script>
<script src="../../../js1/izvelne/izvelne_calorie_btns.js"></script>
<script src="../../../js1/izvelne/izvelne_dienas_btns.js"></script>
<script src="../../../js1/izvelne/izvelne-preference_settings.js"></script>
<script src="../../../js1/izvelne/izvelne-preference_settings-btn-save.js"></script>
<script src="../../../js1/izvelne/izvelne-preference_settings-pressing_filter_btns.js"></script>
<script src="../../../js1/izvelne/izvelne-streak_of_days.js"></script>
<script src="../../../js1/izvelne/izvelne-calorie_protein_fat_carbs-count.js"></script>
<script src="../../../js1/izvelne/izvelne-slides_show_days.js"></script>
<script src="../../../js1/izvelne/izvelne-Air_Datepicker.js"></script>
<script src="../../../js1/izvelne/izvelne-appearance_of_the_edit_button_for_the_edit_food_card_window.js"></script>
<script src="../../../js1/izvelne/izvelne-the_change_button_for_the_food_card_change_window.js"></script>
<script src="../../../js1/izvelne/izvelne-delivery_settings.js"></script>
<script src="../../../js1/izvelne/izvelne-power_card_replacement.js"></script>
<script src="../../../js1/cookies/izvelne/izvelne-popup-cookies-check.js"></script>
<script src="../../../js1/izvelne/izvelne-saving_data_from_basket.js"></script>
<script src="../../../js1/izvelne/izvelne-getting_data_from_basket.js"></script>
</body>