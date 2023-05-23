$(document).ready(function() {
    $('#datepicker').datepicker({
        timepicker: true,//Selecting the time

        //Setting hours and minutes
        minHours: 9,
        maxHours: 18,

        clearButton: true,

        position: 'bottom center',

        minDate: new Date()

    });
    
});