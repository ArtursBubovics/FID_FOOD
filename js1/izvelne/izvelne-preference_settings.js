$(document).ready(function () {

    $(".izvelnes_iestatijumi-settings_div").hide();

    $("#izvelnes_iestatijumi-settings_btn").click(function () {
        $(".izvelnes_iestatijumi-settings_div").show();
        $("#preference_settings").show();  
        $("#delivery_settings").hide();
        $(".izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues").removeAttr("id");      
        $(".izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues").attr("id","installation_on_the_right-bottom_side_of_the_screen");
    });

    $(".black_transparent_background-75_percent").click(function () {
        $(".izvelnes_iestatijumi-settings_div").hide();
        $(".izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter").removeClass("active");
        $(".izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter-btn_div-btn").removeClass("active");   
    });

    $(".izvelnes_iestatijumi-settings-right_return_div-header-img").click(function () {
        $(".izvelnes_iestatijumi-settings_div").hide();
        $(".izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter").removeClass("active");
        $(".izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter-btn_div-btn").removeClass("active"); 
    });


});