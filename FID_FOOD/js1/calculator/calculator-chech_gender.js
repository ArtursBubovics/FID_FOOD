function calculator_chech_gender(){
    
    /* chech ageWeightHeight*/

    if ($('.calculator-cell-body input').is(':checked')) {

        $('#calculator_headers_gender').css('color', 'black');

        $("#calculator-cell-errors_ageWeightHeight-not_entered_gender").hide();

        $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();

        $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();

        return true;

    } else {

        $('#calculator_headers_gender').css('color', 'red');

        $("#calculator-cell-errors_ageWeightHeight-not_entered_gender").show();
        
        return false;
    }
}