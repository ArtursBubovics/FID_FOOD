$(document).ready(function () {

  $(window).on('unload', function () {
    $.removeCookie('extraImagePaths', {
      path: '/FID_FOOD/php/admin/admin_pages'
    });
  });

  $('.food_save_extra_img').click(function () {
    $('.extraImgFileInput').click();
  });

  $('.extraImgFileInput').change(function (e) {
    var file = e.target.files[0];
    saveImageToLocalStorage(file);
  });

  function saveImageToLocalStorage(file) {
    var maxImages = 3;

    var reader = new FileReader();

    reader.onload = function (e) {
      var imagePath = '/FID_FOOD/img1/' + file.name;

      // Получение существующего массива путей к изображениям из cookie
      var existingImagePaths = getExistingImagePaths();

      // Добавление нового пути к изображению в массив
      existingImagePaths.push(imagePath);

      // Сохранение обновленного массива путей к изображениям в cookie
      document.cookie = 'extraImagePaths=' + JSON.stringify(existingImagePaths);

      var divElement = $('<div>')
        .attr('class', 'dicounts_news-img border_1px_solid_black-border-radious_15px padding-20px div-positon_relative cursor_pointer');

      var imageElement = $('<img>')
        .attr('src', e.target.result)
        .attr('alt', '');

      $('.food_save_extra_img').addClass('div_flex-wrap_wrap div_display-flex');

      var firstDicountsNewsImg = $('.dicounts_news-img:first');
      if (firstDicountsNewsImg.length > 0) {
        var imageDiv = divElement.append(imageElement);
        imageDiv.addClass('div_display-flex_justify-content-center_align-items-center margin-right_25px margin-bottom_20px');
        imageDiv.insertBefore(firstDicountsNewsImg);
      }

      // Проверка количества уже добавленных картинок
      if (existingImagePaths.length >= maxImages) {
        // Достигнуто максимальное количество картинок
        $('.dicounts_news-img:last').hide();
      }
      
      console.log('Изображение успешно отображено:', imagePath);
    };

    reader.readAsDataURL(file);
  }

  function getExistingImagePaths() {
    var imagePaths = [];
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim();
      if (cookie.indexOf('extraImagePaths=') === 0) {
        var cookieValue = cookie.substring('extraImagePaths='.length);
        imagePaths = JSON.parse(cookieValue);
        break;
      }
    }
    return imagePaths;
  }
});