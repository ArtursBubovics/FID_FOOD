$(document).ready(function(){
    var inputValue = "+371 "; 
    $('#phone').one('focus', function() {
        if ($(this).val() == '' ) {
            $(this).val(inputValue);
        }
      });
  });
  