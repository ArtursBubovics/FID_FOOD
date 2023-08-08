$(document).ready(function() {

    $('#dropDownPortionNumber').hide();
  
    $('#dropDownPortionNumberBtn').hover(function() {
      $('#dropDownPortionNumber').show();
    }, function() {
      $('#dropDownPortionNumber').hide();
    });
    
    $('#dropDownPortionNumber li').click(function() {
      var selectedItem = $(this).text();
      $('#number_of_people_to_count_portions').text(selectedItem);
      $('#dropDownPortionNumber').hide();
    });
  
  
  });