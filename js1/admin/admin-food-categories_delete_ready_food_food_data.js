$('#categoriesDivContainer').on('click', '.categories_delete-btn', function () {
    var field = $(this).closest('.categories_field');
    field.remove();
  });