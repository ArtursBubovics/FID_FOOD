$(document).ready(function () {
    $('.save_ready_food_btn').click(function () {
        var card = $(this).closest('.food_card');

        var name = card.find('#name').val().trim();
        var markup = card.find('#markup').val().trim();

        var hasCategoriesField = ('#categoriesDivContainer .categories_field').length > 0;

        var hasAllergyField = $('#allergyDivContainer .allergy_field').length > 0;

        var hasSettingsField = $('#settingsDivContainer .settings_field').length > 0;

        var isDiscriotionsFotoFull = $('.food_save_extra_img .dicounts_news-img').length = 3;

        var imagePathCookie = getCookie('imagePath');
        var main_foto;

        if (name === '' || markup === '') {
            $('#ready_food-admin-fields-popup').addClass('show_popup');
            setTimeout(function () {
                if ($('#ready_food-admin-fields-popup').hasClass('show_popup')) {
                    $('#ready_food-admin-fields-popup').removeClass('show_popup');
                }
            }, 4000);
        } else {
            if (imagePathCookie) {
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i].trim();
                    if (cookie.indexOf('imagePath=') === 0) {
                        var cookieValue = cookie.substring('imagePath='.length);
                        main_foto = cookieValue; // Значение пути к изображению
                        break;
                    }
                }

                if (isDiscriotionsFotoFull) {

                    var imagePathArray = getExtraImagePathsFromCookie();


                    if (hasCategoriesField || hasAllergyField || hasSettingsField) {
                        var categoriesArray = [],
                            allergyArray = [],
                            settingsArray = [];

                        if (hasCategoriesField) {
                            $('#categoriesDivContainer .categories_field').each(function () {
                                var categoryField = $(this);
                                categoriesArray.push(categoryField.find('p').text());
                            });
                        }

                        if (hasAllergyField) {
                            $('#allergyDivContainer .allergy_field').each(function () {
                                var allergyField = $(this);
                                allergyArray.push(allergyField.find('p').text());
                            });

                        }

                        if (hasSettingsField) {
                            $('#settingsDivContainer .settings_field').each(function () {
                                var settingsField = $(this);
                                settingsArray.push(settingsField.find('p').text());
                            });
                        }

                        save_ready_food_fields_to_db(name, markup, main_foto, categoriesArray, allergyArray, imagePathArray, settingsArray);

                        create_new_ready_food_card();

                    } else {
                        save_ready_food_fields_to_db(name, markup, main_foto, imagePathArray);

                        create_new_ready_food_card();
                    }
                } else {
                    $('#ready_food-admin-descriptions_foto-popup').addClass('show_popup');
                    setTimeout(function () {
                        if ($('#ready_food-admin-descriptions_foto-popup').hasClass('show_popup')) {
                            $('#ready_food-admin-descriptions_foto-popup').removeClass('show_popup');
                        }
                    }, 4000);
                }
            }


        }
    });

    function getCookie(cookieName) {
        var name = cookieName + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var cookieArray = decodedCookie.split(';');
        for (var i = 0; i < cookieArray.length; i++) {
            var cookie = cookieArray[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(name) === 0) {
                return cookie.substring(name.length, cookie.length);
            }
        }
        return "";
    }

    function getExtraImagePathsFromCookie() {
        var cookies = document.cookie.split(';');
        var extraImagePaths = [];

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();

            if (cookie.indexOf('extraImagePaths=') === 0) {
                var cookieValue = cookie.substring('extraImagePaths='.length);
                extraImagePaths = JSON.parse(cookieValue);
                break;
            }
        }

        return extraImagePaths;
    }
});