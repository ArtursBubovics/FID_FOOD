function ageVerificheckErroscation(users_goal) {

    $("#mass_index_information").show();

    const reposition_cm_to_meters = 0.01;
    const fifteen_percent = 0.15,
        twenty_five_percent = 0.25,
        sixty_percent = 0.6;

    var mass_index,
        ideal_weight,
        calorie_range,
        gender;

    var amount_of_proteins,
        amount_of_fat,
        amount_of_carbohydrates;

    const users_goal_reduce_weight = -1,
        users_goal_increase_weight = 1
    // var mass_index_scale_color;

    //Getting entered data
    var age = $("#age").val(),
        height = $("#height").val(),
        weight = $("#weight").val(),
        load = $("#load").val();

    //Calculation of human load
    if (load == "Minimāla - jums ir sēdošs darbs un nav fiziskas aktivitātes.") {

        load = 1.2;

    } else if (load == "Zema - jūs laiku pa laikam vingrojat un ikdienā esat diezgan aktīvs.") {

        load = 1.375;

    } else if (load == "Vidēja - jūs trenējaties 3-5 reizes nedēļā.") {

        load = 1.55;

    } else if (load == "Augsta - jūs trenējaties 6-7 reizes nedēļā.") {

        load = 1.7;

    } else {

        load = 1.9;

    }

    //Sex determination
    if ($('.calculator-cell-body input').is(':checked')) {

        if ($('.calculator-cell-body #Virietis').is(':checked')) {

            //Sex determination - male
            gender = $('.calculator-cell-body #Virietis').val();

        } else {

            //Sex determination - female
            gender = $('.calculator-cell-body #Sieviete').val();

        }
    }

    //Mass index calculation
    mass_index = weight / Math.pow((height * reposition_cm_to_meters), 2);


    //Ideal weight calculation
    if (gender == "Virietis") {

        //Ideal weight calculation for men
        ideal_weight = height - 100;

    } else {

        //Ideal weight calculation for women
        ideal_weight = height - 110;

    }

    //Сalorie range counting
    if (gender === "Virietis") {

        //Сalorie range counting foe men
        calorie_range = (9.99 * weight) + (6.25 * height) - (4.92 * age) + 5;

    } else {

        //Сalorie range counting for women
        calorie_range = (9.99 * weight) + (6.25 * height) - (4.92 * age) - 161;

    }

    //Calorie counting for weight loss
    if (users_goal == users_goal_increase_weight) {

        calorie_range = calorie_range + (calorie_range * fifteen_percent);

    } else if (users_goal == users_goal_reduce_weight) {

        calorie_range = calorie_range - (calorie_range * fifteen_percent);

    }

    //Сounting the amount of proteins
    amount_of_proteins = (calorie_range * fifteen_percent) / 4;

    //Calculating the amount of fat
    amount_of_fat = (calorie_range * twenty_five_percent) / 9;

    //Counting the amount of carbohydrates
    amount_of_carbohydrates = (calorie_range * sixty_percent) / 4;

    $("#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss").text(mass_index.toFixed(1));

    $("#calculator-content-return-box-contant-body-h3-second_Ideālais_svars").text(ideal_weight.toFixed(1));

    $("#calculator-content-return-box-contant-body-h3-third_Kaloriju_diapazons").text(calorie_range.toFixed(1));

    $("#calculator-content-return-box-contant-body-h3-fourth_Olbaltumvielu_diennakts_norma").text(amount_of_proteins.toFixed(1));

    $("#calculator-content-return-box-contant-body-h3-fifth_Tauku_diennakts_norma").text(amount_of_fat.toFixed(1));

    $("#calculator-content-return-box-contant-body-h3-sixth_Ogļūdeņražu_diennakts_norma").text(amount_of_carbohydrates.toFixed(1));


    if (mass_index <= 16) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(0, 0, 240)');
    } else if (mass_index <= 18.5) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(0, 255, 255)');
    } else if (mass_index <= 25) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(0, 255, 0)');
    } else if (mass_index <= 30) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(173, 255, 47)');
    } else if (mass_index <= 35) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(255, 255, 0)');
    } else if (mass_index <= 40) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(255, 128, 0)');
    } else if (mass_index > 40) {
        $('#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss').css('background-color', 'rgb(240, 0, 0)');
    }
}