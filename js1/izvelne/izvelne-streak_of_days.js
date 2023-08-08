$(document).ready(function () {
  $("#return-slider-days").hide();
  var values = [1, 3, 5, 7, 14, 28];
  var currentIndex = 0;
  var slider = $("#dayRange");
  var sliderValueMain = $("#slider-value"),
    sliderReturnValue = $("#return-slider-value"),
    sliderValueDropdownBtn = $("#enter_retrun_days_p-dropdown_btn");

  slider.attr({
    min: 0,
    max: values.length - 1
  });
  slider.val(currentIndex);

  function updateSliderValue() {
    sliderValueMain.text(values[currentIndex]);
    sliderReturnValue.text(values[currentIndex]);
    sliderValueDropdownBtn.text(values[currentIndex]);
  }
  updateSliderValue();
  slider.on("input", function () {
    currentIndex = slider.val();
    if (values[currentIndex] === 1) {
      $("#return-slider-day").show();
      $("#return-slider-days").hide();
    } else {
      $("#return-slider-days").show();
      $("#return-slider-day").hide();
    }
    updateSliderValue();
  });
});