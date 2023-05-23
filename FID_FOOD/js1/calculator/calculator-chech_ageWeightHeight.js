
function calculatr_chech_ageWeightHeight(){
    
    /* chech ageWeightHeight*/

    if ($("#age").val().trim() != "") {
        if ($.isNumeric($("#age").val())) { // $.isNumeric iekļauta funkcija, lai pārbaudītu vai ievadīti numuri
            $('#age_header').css('color', 'black');
            $('#calculator_headers_ageWeightHeight').css('color', 'black');
            $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();
            $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();
        } else {
            $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").show();
            $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();
            $('#age_header').css('color', 'red');
            $('#calculator_headers_ageWeightHeight').css('color', 'red');
            return false;
        }

    } else {
        $("#calculator-cell-errors_ageWeightHeight-empty_field").show();
        $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();
        $('#age_header').css('color', 'red');
        $('#calculator_headers_ageWeightHeight').css('color', 'red');
        return false;
    }

    if ($("#weight").val().trim() != "") {
        if ($.isNumeric($("#weight").val())) { // $.isNumeric iekļauta funkcija, lai pārbaudītu vai ievadīti numuri
            $('#weight_header').css('color', 'black');
            $('#calculator_headers_ageWeightHeight').css('color', 'black');
            $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();
            $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();
        } else {
            $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").show();
            $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();
            $('#weight_header').css('color', 'red');
            $('#calculator_headers_ageWeightHeight').css('color', 'red');
            return false;
        }

    } else {
        $("#calculator-cell-errors_ageWeightHeight-empty_field").show();
        $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();
        $('#weight_header').css('color', 'red');
        $('#calculator_headers_ageWeightHeight').css('color', 'red');
        return false;
    }

    if ($("#height").val().trim() != "") {
        if ($.isNumeric($("#height").val())) { // $.isNumeric iekļauta funkcija, lai pārbaudītu vai ievadīti numuri
            $('#height_header').css('color', 'black');
            $('#calculator_headers_ageWeightHeight').css('color', 'black');
            $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();
            $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();

        } else {
            $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").show();
            $("#calculator-cell-errors_ageWeightHeight-empty_field").hide();
            $('#height_header').css('color', 'red');
            $('#calculator_headers_ageWeightHeight').css('color', 'red');
            return false;
        }

    } else {
        $("#calculator-cell-errors_ageWeightHeight-empty_field").show();
        $("#calculator-cell-errors_ageWeightHeight-not_entered_numbers").hide();
        $('#height_header').css('color', 'red');
        $('#calculator_headers_ageWeightHeight').css('color', 'red');
        return false;
    }
    
    return true;
} 