$(document).ready(function () {

    $("#mass_index_description").hide();

    $('#mass_index_information').mouseenter(function () {
        $("#mass_index_description").show();
    });

    $('#mass_index_information').mouseleave(function () {
        $("#mass_index_description").hide();

    });

})