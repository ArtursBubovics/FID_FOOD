$(document).ready(function() {

  $('#dropDown').hide();

  $('.izvelne-menu-name_and_enterDay-enterDay-dropDownBtn-enter_retrun_days').hover(function() {
    $('#dropDown').show();
  }, function() {
    $('#dropDown').hide();
  });
  
  $('#dropDown li').click(function() {
    var selectedItem = $(this).text();
    $('#enter_retrun_days_p-dropdown_btn').text(selectedItem);
    $('#slider-value').text(selectedItem);
    $('#return-slider-value').text(selectedItem);
    if (selectedItem == 1) {
      $("#return-slider-day").show();
      $("#return-slider-days").hide();
    } else {
      $("#return-slider-days").show();
      $("#return-slider-day").hide();
    }
    $('#dropDown').hide();
  });


});