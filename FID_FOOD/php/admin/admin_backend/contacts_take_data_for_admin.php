<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

if ($mysql->connect_errno) {
    echo 'Не удалось подключиться к MySQL: ' . $mysql->connect_error;
    exit;
}

// Выполнение SQL-запроса для получения одной строки данных
$sql = "SELECT foto, adrese, talrunis, pasts, darba_laiks, facebook_link, twitter_link, instagram_link FROM kontakts";
$result = $mysql->query($sql);

if ($result && $result->num_rows > 0) {
    // Получение результирующей строки
    $row = $result->fetch_assoc();

    // Получение значений из результирующей строки
    $value1 = $row['foto'];    
    $value2 = $row['adrese'];
    $value3 = $row['talrunis'];
    $value4 = $row['pasts'];
    $value5 = $row['darba_laiks'];    
    $value6 = $row['facebook_link'];
    $value7 = $row['twitter_link'];
    $value8 = $row['instagram_link'];

    echo "<div class='w-900px_h-100_percent padding-top-12px'>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                ADRESE";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-address' value='$value2' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                TALRUNIS";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-phone' value='$value3' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                DARBA LAIKS";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-work_time' value='$value4' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                E-PASTS";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-gmail' value='$value5' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                FACEBOOK SAITE";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-facebook_link' value='$value6' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                TWITTER SAITE";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-twitter_link' value='$value7' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                INSTAGRAM SAITE";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-instagram_link' value='$value8' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "</div>";
    }
?>