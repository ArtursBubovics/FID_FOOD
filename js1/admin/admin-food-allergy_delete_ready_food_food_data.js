$('#allergyDivContainer').on('click', '.allergy_delete-btn', function () {
    var field = $(this).closest('.allergy_field');
    field.remove();
  });