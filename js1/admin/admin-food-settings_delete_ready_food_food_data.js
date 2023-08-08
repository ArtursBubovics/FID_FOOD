$('#settingsDivContainer').on('click', '.settings_delete-btn', function () {
    var field = $(this).closest('.settings_field');
    field.remove();
  });