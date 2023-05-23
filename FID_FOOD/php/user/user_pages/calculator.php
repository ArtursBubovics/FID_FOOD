<?php
include('header.php');
?>
<script>
    $.ajax({
        url: "calculator-input_validation.js",
        dataType: "script",
        success: function() {
            ageVerificheckErroscation();
        }
    });
</script>
<div class="calculator div-positon_relative">
    <div class="container-padding_left_right_220px-up_60px">
        <div class="calculator-header">
            <div class="calculator-header-container">
                <h2 class="h2-size_45px">KALORIJU KALKULĀTORS</h2>
            </div>
        </div>
        <div class="container-of-two-divs">
            <div class="calculator-content-quiz calculator-content-height">
                <div class="calculator-content-container">
                    <div class="calculator-content-body">
                        <div class="calculator-content-body-content">
                            <div class="calculator-content-body-content-cell">
                                <div class="calculator-cell-title-and-body">
                                    <div class="calculator-cell-title">
                                        <h3 class="h3-size_24px font-weight_normal" id="calculator_headers_gender">Dzimums:</h3>
                                    </div>
                                    <div class="calculator-cell-body">
                                        <div class="cell-body-content">
                                            <label class="p-font_size_21px" for="Virietis">
                                                <input type="radio" id="Virietis" name="fav_language" value="Virietis">
                                                Virietis
                                            </label><br>
                                        </div>
                                        <div class="cell-body-content">
                                            <label class="p-font_size_21px p-font_size_21px" or="Sieviete">
                                                <input type="radio" id="Sieviete" name="fav_language" value="Sieviete">Sieviete
                                            </label><br>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="calculator-content-body-content-cell  cell-age-height-weight">
                                <div class="calculator-cell-title">
                                    <h3 class="h3-size_24px font-weight_normal" id="calculator_headers_ageWeightHeight">Vecuma, svara, auguma parametri:</h3>
                                </div>
                                <div class="calculator-cell-body">
                                    <div class="cell-age-height-weight-content">
                                        <div class="calculator-cell-title">
                                            <p class="p-font_size_21px margin_0 div_text-align-center" id="age_header">
                                                Vecums ( gados )</p>
                                        </div>
                                        <div class="calculator-cell-body-options">
                                            <input class="calculator-cell-body-options-input" type="text" id="age" name="age"><br>
                                        </div>
                                    </div>
                                    <div class="cell-age-height-weight-content padding-left-right">
                                        <div class="calculator-cell-title">
                                            <p class="p-font_size_21px margin_0 div_text-align-center" id="weight_header">Svars
                                                ( kg )</p>
                                        </div>
                                        <div class="calculator-cell-body-options">
                                            <input class="calculator-cell-body-options-input" type="text" id="weight" name="weight"><br>
                                        </div>
                                    </div>
                                    <div class="cell-age-height-weight-content padding-left-right">
                                        <div class="calculator-cell-title">
                                            <p class="p-font_size_21px margin_0 div_text-align-center" id="height_header">
                                                Augums ( cm )</p>
                                        </div>
                                        <div class="calculator-cell-body-options">
                                            <input class="calculator-cell-body-options-input" type="text" id="height" name="height"><br>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="calculator-content-body-content-cell">
                                <div class="calculator-cell-title">
                                    <h3 class="h3-size_24px font-weight_normal" id="calculator_headers_btn">Jūsu mērķis:</h3>
                                </div>
                                <div class="calculator-cell-body">
                                    <div class="calculator-cell-body-target-button">
                                        <div class="content-cell-button">
                                            <button class="p-font_size_21px btn-target" id="content-cell-button-first" type="submit">Samazināt svaru</button>
                                        </div>
                                    </div>
                                    <div class="calculator-cell-body-target-button">
                                        <div class="content-cell-button">
                                            <button class="p-font_size_21px btn-target button-center-margin" id="content-cell-button-second" type="submit">Uzturēt svaru</button>
                                        </div>
                                    </div>
                                    <div class="calculator-cell-body-target-button">
                                        <div class="content-cell-button">
                                            <button class="p-font_size_21px btn-target" id="content-cell-button-third" type="submit" d>Palielināt svaru</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="calculator-content-body-content-cell-height-115px">
                                <div class="calculator-cell-title">
                                    <h3 class="h3-size_24px font-weight_normal">Fiziskā aktivitāte</h3>
                                </div>
                                <div class="calculator-cell-body">
                                    <select id="load" name="load" class="p-font_size_21px">
                                        <option value="Minimāla" class="p-font_size_21px">Minimāla - jums ir
                                            sēdošs darbs un nav fiziskas aktivitātes.</option>
                                        <option value="Zema" class="p-font_size_21px">Zema - jūs laiku pa
                                            laikam vingrojat un ikdienā esat diezgan aktīvs.</option>
                                        <option value="Vidēja" class="p-font_size_21px">Vidēja - jūs
                                            trenējaties 3-5 reizes nedēļā.</option>
                                        <option value="Augsta" class="p-font_size_21px">Augsta - jūs
                                            trenējaties 6-7 reizes nedēļā.</option>
                                        <option value="Ļoti_augsta" class="p-font_size_21px">Ļoti augsta - jūs
                                            trenējaties 6 vai vairāk reizes nedēļā un strādā fiziski.</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Errros -->
                            <div class="calculator-cell-errors_ageWeightHeight">
                                <div id="calculator-cell-errors_ageWeightHeight-not_entered_gender">
                                    <p class="calculator-errors_p">Izvēlēties kādu no piedāvātajiem dzimumiem!</p>
                                </div>
                                <div id="calculator-cell-errors_ageWeightHeight-not_entered_numbers">
                                    <p class="calculator-errors_p">Ievadiet ciparus, nevis kaut ko citu!</p>
                                </div>
                                <div id="calculator-cell-errors_ageWeightHeight-empty_field">
                                    <p class="calculator-errors_p">Laukā ievadiet vecumu (skaitļos)!</p>
                                </div>
                                <div id="calculator-cell-errors_ageWeightHeight-not_entered_btn">
                                    <p class="calculator-errors_p">Atlasiet vienu no pogām!</p>
                                </div>

                            </div>

                            <div class="calculator-content-body-content-cell-buttons">
                                <div class="calculator-content-body-content-cell-buttons-container">
                                    <div class="content-cell-buttons-calculate">
                                        <button class="btn count div_display-flex_justify-content-center_align-items-center">
                                            <p class="p-font_size_16px">Aprēķināt</p>
                                        </button>
                                    </div>
                                    <div class="content-cell-button-clear">
                                        <button class="btn clear div_display-flex_justify-content-center_align-items-center">
                                            <p class="p-font_size_16px">Notīrīt laukus</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calculator-content-return-box  calculator-content-height">
                <div class="calculator-content-return-box-container">
                    <div class="calculator-content-return-box-contant">
                        <div class="calculator-content-return-box-contant-header">
                            <div class="calculator-content-return-box-contant-header-container">
                                <div class="calculator-content-return-box-contant-header-container-h3">
                                    <h2 class="h2-size_35px font-weight_normal">Rezultāts</h2>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-content-return-box-contant-body">
                            <div class="calculator-content-return-box-contant-body-container">
                                <div class="calculator-content-return-box-contant-body-h3-first alignment_h3_and_answer padding-top-botttom-14px">
                                    <h3 class="h3-size_26px font-weight_normal">Ķermeņa masas indekss:
                                    </h3>
                                    <div class="calculator-content-return-box-contant-body-answers" id="mass_index_information">
                                        <h3 id="calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss" class="h3-size_23px font-weight_normal"></h3>
                                        <div class="padding-left-3px div_display-flex_justify-content-center_align-items-center">
                                            <img class="cursor_pointer" src="../../../img1/icon-info.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="calculator-content-return-box-contant-body-h3-second alignment_h3_and_answer padding-top-botttom-14px">
                                    <h3 class="h3-size_26px font-weight_normal">Ideālais svars:</h3>
                                    <div class="calculator-content-return-box-contant-body-answers">
                                        <h3 id="calculator-content-return-box-contant-body-h3-second_Ideālais_svars" class="h3-size_23px font-weight_normal"></h3>
                                    </div>
                                </div>
                                <div class="calculator-content-return-box-contant-body-h3-third alignment_h3_and_answer padding-top-botttom-14px">
                                    <h3 class="h3-size_26px font-weight_normal">Kaloriju diapazons:</h3>
                                    <div class="calculator-content-return-box-contant-body-answers">
                                        <h3 id="calculator-content-return-box-contant-body-h3-third_Kaloriju_diapazons" class="h3-size_23px font-weight_normal"></h3>
                                    </div>
                                </div>
                                <div class="calculator-content-return-box-contant-body-h3-fourth alignment_h3_and_answer padding-top-botttom-14px">
                                    <h3 class="h3-size_26px font-weight_normal">Olbaltumvielu diennakts
                                        norma:</h3>
                                    <div class="calculator-content-return-box-contant-body-answers">
                                        <h3 id="calculator-content-return-box-contant-body-h3-fourth_Olbaltumvielu_diennakts_norma" class="h3-size_23px font-weight_normal"></h3>
                                    </div>
                                </div>
                                <div class="calculator-content-return-box-contant-body-h3-fifth alignment_h3_and_answer padding-top-botttom-14px">
                                    <h3 class="h3-size_26px font-weight_normal">Tauku diennakts norma:
                                    </h3>
                                    <div class="calculator-content-return-box-contant-body-answers">
                                        <h3 id="calculator-content-return-box-contant-body-h3-fifth_Tauku_diennakts_norma" class="h3-size_23px font-weight_normal"></h3>
                                    </div>
                                </div>
                                <div class="calculator-content-return-box-contant-body-h3-sixth alignment_h3_and_answer padding-top-botttom-14px">
                                    <h3 class="h3-size_26px font-weight_normal">Ogļūdeņražu diennakts norma:</h3>
                                    <div class="calculator-content-return-box-contant-body-answers">
                                        <h3 id="calculator-content-return-box-contant-body-h3-sixth_Ogļūdeņražu_diennakts_norma" class="h3-size_23px font-weight_normal"></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mass_index_description" class="w-25_percent_h-auto div-position_absolute-top_0-right_0 background_color-white box-shadow-0px-0px-1px-1px-black margin-top-25px margin-right-35px">
        <table class="border_style-none_border_collapse-collapse">
            <tr>
                <td class="background-color-rgb-0_0_240-blue w-25_percent_h-auto div_text-align-center_align-items-center">&lt; 16</td>
                <td>- Apzināts ķermeņa masas deficīts</td>
            </tr>
            <tr>
                <td class="background-color-rgb-0_0_240-light_blue w-25_percent_h-auto div_text-align-center_align-items-center">16-18,5</td>
                <td>- Nepietiekama ķermeņa masa</td>
            </tr>
            <tr>
                <td class="background-color-rgb-0_0_240-green w-25_percent_h-auto div_text-align-center_align-items-center">18,5-25</td>
                <td>- Norma</td>
            </tr>
            <tr>
                <td class="background-color-rgb-0_0_240-light_green w-25_percent_h-auto div_text-align-center_align-items-center">25-30</td>
                <td>- Izbālēšanās (pārmērīga ķermeņa masa)</td>
            </tr>
            <tr>
                <td class="background-color-rgb-255_255_0-yellow w-25_percent_h-auto div_text-align-center_align-items-center">30-35</td>
                <td>- 1. pakāpes aptaukošanās</td>
            </tr>
            <tr>
                <td class="background-color-rgb-255_128_0-orange w-25_percent_h-auto div_text-align-center_align-items-center">35-40</td>
                <td>- 2. pakāpes aptaukošanās</td>
            </tr>
            <tr>
                <td class="background-color-rgb-240_0_0-red w-25_percent_h-auto div_text-align-center_align-items-center">40 &lt;</td>
                <td>- 3. pakāpes aptaukošanās</td>
            </tr>
        </table>
    </div>
</div>

<script src="../../../js1/calculator/calculator.js"></script>
<script src="../../../js1/calculator/calculator-input_validation.js"></script>
<script src="../../../js1/calculator/calculator-chech_gender.js"></script>
<script src="../../../js1/calculator/calculator-chech_ageWeightHeight.js"></script>
<script src="../../../js1/calculator/calculator-chech_btns.js"></script>
<script src="../../../js1/calculator/calculator-mass_index_information.js"></script>