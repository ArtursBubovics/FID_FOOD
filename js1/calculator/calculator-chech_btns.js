function calculator_chech_btns() {
    if ($('#content-cell-button-first').hasClass('pressed') || $('#content-cell-button-second').hasClass('pressed') || $('#content-cell-button-third').hasClass('pressed')) {
        $("#calculator-cell-errors_ageWeightHeight-not_entered_btn").hide();
        $('#calculator_headers_btn').css('color', 'black');
    } else {
        $("#calculator-cell-errors_ageWeightHeight-not_entered_btn").show();
        $('#calculator_headers_btn').css('color', 'red');
        return false;
    }
    return true;
}