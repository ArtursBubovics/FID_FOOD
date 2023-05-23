$(document).ready(function () {
    var currentDate = new Date();
    var options = {
        day: 'numeric',
        month: 'long'
    };

    const daysOfWeek = ['Sv', 'P', 'O', 'T', 'C', 'Pk', 'Se'];

    var num_of_шdentical_classes = $('.izvelne-menu-menu_calendar-p').length;

    for (let i = 0; i < num_of_шdentical_classes; i++) {
        if (i == 0) {
            currentDate.setDate(currentDate.getDate());
            const dayOfWeek = daysOfWeek[currentDate.getDay()];
            const formatedDate = `${dayOfWeek}` + ', ' + currentDate.toLocaleDateString('lv-LV', options);
            $('.izvelne-menu-menu_calendar-p').eq(i).html(formatedDate); //allows to select elements by their index.
        } else {
            currentDate.setDate(currentDate.getDate() + 1);
            const dayOfWeek = daysOfWeek[currentDate.getDay()];
            const formatedDate = `${dayOfWeek}` + ', ' + currentDate.toLocaleDateString('lv-LV', options);     
            $('.izvelne-menu-menu_calendar-p').eq(i).html(formatedDate); //allows to select elements by their index.
        }

    }    
});