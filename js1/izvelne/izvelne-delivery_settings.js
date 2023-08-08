$(document).ready(function() {
    $('#izvelne-additional_settings-img').click(function() 
    {
        $(".izvelnes_iestatijumi-settings_div").show();
        $("#delivery_settings").show();  
        $("#preference_settings").hide(); 
        $(".izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues").removeAttr("id");    
        $(".izvelnes_iestatijumi-settings-right_return_div-body-saveAndDeleteValues").attr("id", "installation_on_the_left-bottom_side_of_the_screen");
    })
})