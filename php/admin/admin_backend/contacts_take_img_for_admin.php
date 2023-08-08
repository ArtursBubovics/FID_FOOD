<?php

$mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

if ($mysql->connect_errno) {
    echo 'Не удалось подключиться к MySQL: ' . $mysql->connect_error;
    exit;
}

// Выполнение SQL-запроса для получения одной строки данных
$checkQuery = "SELECT * FROM kontakts WHERE foto IS NOT NULL";
$result = $mysql->query($checkQuery);



if ($result && $result->num_rows == 0) {


    echo '<div id="contacts-change_img" class="img-kontakti-content-foto border_1px_solid_black-border-radious_25px div-positon_relative cursor_pointer">';
    echo '    <div class="add_img-container w_and_h-100_percent">';
    echo '        <div class="w_and_h-100_percent div_display-flex_justify-content-center_align-items-center">';
    echo '            <div class="w_and_h-50px div_display-flex_justify-content-center_align-items-center border_1px_solid_black-border-radious_25px">';
    echo '                <img src="../../../img1/icon-plus.png" alt="">';
    echo '            </div>';
    echo '        </div>';
    echo '        <div class="div-position_absolute-top_0-left_0 padding-top-20px padding-left-20px">';
    echo '            <h2 class="h2-size_35px font-weight_normal">Pievienot</h2>';
    echo '        </div>';
    echo '    </div>';
    echo '    <div class="image-container w_and_h-100_percent">';
    echo '    </div>';
    echo '</div>';
    echo '<input type="file" class="fileInput" style="display: none;">';
} else {    
    
    $row = $result->fetch_assoc();
    $value = $row['foto'];

    echo '<div id="contacts-change_img" class="img-kontakti-content-foto div-positon_relative cursor_pointer">';
    echo '<img src="' . $value . '" alt="" class="w_and_h-100_percent border_1px_solid_black-border-radious_25px">';
    echo '</div>';
}
