$(document).ready(function () {

    $(window).on('unload', function() {
        $.removeCookie('imagePath', { path: '/FID_FOOD/php/admin/admin_pages' });
      });

    $('#food_save_main_img').click(function () {
        $('.fileInput').click();
    });

    $('.fileInput').change(function (e) {
        var file = e.target.files[0];
        saveImageToLocalStorage(file);
    });

    function saveImageToLocalStorage(file) {
        var reader = new FileReader();

        reader.onload = function (e) {

            var imagePath = '/FID_FOOD/img1/' + file.name;
            document.cookie = 'imagePath=' + imagePath;
            var imageElement = $('<img>').attr('src', e.target.result).attr('alt', '');
            $('.ready_food-main_img').empty().append(imageElement);
            $('.ready_food-main_img').addClass('div_display-flex_justify-content-center_align-items-center')
            console.log('Картинка успешно отображена:', imagePath);
        }
        reader.readAsDataURL(file);
    };
});