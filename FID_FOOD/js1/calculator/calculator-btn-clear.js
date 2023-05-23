$(".clear").click(function () {

    $('input').val('');

    $('input[type="radio"]').prop('checked', false);

    users_goal = null;

    $('#load').val($('#load option:first').prop('value'));

    $("#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss").text('');

    $("#calculator-content-return-box-contant-body-h3-second_Ideālais_svars").text('');

    $("#calculator-content-return-box-contant-body-h3-third_Kaloriju_diapazons").text('');

    $("#calculator-content-return-box-contant-body-h3-fourth_Olbaltumvielu_diennakts_norma").text('');

    $("#calculator-content-return-box-contant-body-h3-fifth_Tauku_diennakts_norma").text('');

    $("#calculator-content-return-box-contant-body-h3-sixth_Ogļūdeņražu_diennakts_norma").text('');

})