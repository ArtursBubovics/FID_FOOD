$(document).ready(function() {
    $('#datepicker').datepicker({
        timepicker: true,//Selecting the time

        //Setting hours and minutes
        minHours: 9,
        maxHours: 18,

        clearButton: true,

        position: 'bottom center',        
        
        minDate: new Date(),

        language: {
            days: ['Pirmdiena', 'Otrdiena', 'Trešdiena', 'Ceturtdiena', 'Piektdiena', 'Sestdiena', 'Svētdiena'],
            daysShort: ['Pr', 'Ot', 'Tr', 'Ct', 'Pk', 'St','Sv'],
            daysMin: ['P', 'O', 'T', 'C', 'Pk', 'S','Sv'],
            months: ['Janvāris', 'Februāris', 'Marts', 'Aprīlis', 'Maijs', 'Jūnijs', 'Jūlijs', 'Augusts', 'Septembris', 'Oktobris', 'Novembris', 'Decembris'],
            monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
            today: 'Šodien',
            clear: 'Izdzēst'
        },
        


        firstDay: 0 // Устанавливаем понедельник первым днем недели


    })
    
});