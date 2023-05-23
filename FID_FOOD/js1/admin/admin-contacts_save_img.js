$(document).ready(function() {

    $('#contacts-change_img').click(function() {
        $('.fileInput').click();
    });

    $('.fileInput').change(function(e) {
        var file = e.target.files[0];
        saveImageToDatabase(file);
    });

    function saveImageToDatabase(file) {
        var formData = new FormData();
        formData.append('imageFile', file, file.name);

        $.ajax({
            url: '/FID_FOOD/php/admin/admin_backend/contacts_save_img.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Обработка успешного сохранения в базе данных
                console.log('Изображение успешно сохранено в базе данных.');
            },
            error: function(xhr, status, error) {
                // Обработка ошибки при сохранении в базе данных
                console.error('Ошибка при сохранении изображения в базе данных');
            }
        });
    }
});