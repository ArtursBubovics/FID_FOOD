$(document).ready(function(){
    $('.content-cell-button-clear').click(function(){

        //genders fields
        $('input[type="radio"]').prop('checked', false);

        //age, height, weight fields
        $("#age").val(''),
        $("#height").val(''),
        $("#weight").val('')

        //btns targets
        $('#content-cell-button-first').removeClass('pressed');
        $('#content-cell-button-second').removeClass('pressed');
        $('#content-cell-button-third').removeClass('pressed');

        //physical activity
        $('#load').val($('#load option:first').val());

        //calculation result fields
        $("#mass_index_information").hide();
        $("#calculator-content-return-box-contant-body-h3-first_Ķermeņa_masas_indekss").text('');
        $("#calculator-content-return-box-contant-body-h3-second_Ideālais_svars").text('');
        $("#calculator-content-return-box-contant-body-h3-third_Kaloriju_diapazons").text('');
        $("#calculator-content-return-box-contant-body-h3-fourth_Olbaltumvielu_diennakts_norma").text('');
        $("#calculator-content-return-box-contant-body-h3-fifth_Tauku_diennakts_norma").text('');
        $("#calculator-content-return-box-contant-body-h3-sixth_Ogļūdeņražu_diennakts_norma").text('');
    })
})