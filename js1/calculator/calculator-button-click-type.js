function caclculator_button_click(){
    
    var users_goal;

    const users_goal_reduce_weight = -1,
        users_goal_hold_the_weight = 0,
        users_goal_increase_weight = 1

    $("#content-cell-button-first").click(function () {
        users_goal = users_goal_reduce_weight;
        if ($("#content-cell-button-second").hasClass('pressed') || $("#content-cell-button-third").hasClass('pressed')) {
            $("#content-cell-button-second").removeClass('pressed');
            $("#content-cell-button-third").removeClass('pressed');

        } else if ($("#content-cell-button-first").hasClass('pressed')) {
            $("#content-cell-button-first").removeClass('pressed');
        } else {

            $("#content-cell-button-first").addClass('pressed');

        } 

        return users_goal;
    });

    $("#content-cell-button-second").click(function () {
        users_goal = users_goal_hold_the_weight;
        if ($("#content-cell-button-first").hasClass('pressed') || $("#content-cell-button-third").hasClass('pressed')) {

            $("#content-cell-button-first").removeClass('pressed');
            $("#content-cell-button-third").removeClass('pressed');

        } else if ($("#content-cell-button-second").hasClass('pressed')) {
            $("#content-cell-button-second").removeClass('pressed');
        } else {

            $("#content-cell-button-second").addClass('pressed');

        }

        return users_goal;
    });

    $("#content-cell-button-third").click(function () {
        if ($("#content-cell-button-first").hasClass('pressed') || $("#content-cell-button-second").hasClass('pressed')) {
            users_goal = users_goal_increase_weight;
            $("#content-cell-button-first").removeClass('pressed');
            $("#content-cell-button-second").removeClass('pressed');

        } else if ($("#content-cell-button-third").hasClass('pressed')) {
            $("#content-cell-button-third").removeClass('pressed');
        } else {

            $("#content-cell-button-third").addClass('pressed');

        }

        return users_goal;
    });

}