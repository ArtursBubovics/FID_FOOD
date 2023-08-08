<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

if ($mysql->connect_errno) {
    echo 'Не удалось подключиться к MySQL: ' . $mysql->connect_error;
    exit;
}

// Выполнение SQL-запроса для получения одной строки данных
//----
$sql = "SELECT foto, facebook_link, twitter_link, instagram_link FROM kontakts";
$result_kontakts = $mysql->query($sql);

// Получение результирующей строки
$row_foto_and_links = $result_kontakts->fetch_assoc();

$value1 = $row_foto_and_links['foto']; 
$value6 = $row_foto_and_links['facebook_link'];
$value7 = $row_foto_and_links['twitter_link'];
$value8 = $row_foto_and_links['instagram_link'];

//----
$sql = "SELECT laiks FROM darba_laiks";
$result_darba_laiks = $mysql->query($sql);

// Получение результирующей строки
 $row_work_time = $result_darba_laiks->fetch_assoc();

 $value2 = $row_work_time['laiks'];
//----
$sql = "SELECT adrese FROM adrese";
$result_adrese = $mysql->query($sql);

// Получение результирующей строки
 $row_addresses = $result_adrese->fetch_assoc();

 $value3 = $row_addresses['adrese'];
//----
$sql = "SELECT talrunis FROM talrunis";
$result_talrunis = $mysql->query($sql);

// Получение результирующей строки
 $row_phone = $result_talrunis->fetch_assoc();
 $value4 = $row_phone['talrunis'];
//----
$sql = "SELECT pasts FROM pasts";
$result_pasts = $mysql->query($sql);

// Получение результирующей строки
 $row_gmail = $result_pasts->fetch_assoc();

$value5 = $row_gmail['pasts'];


    echo "<div class='w-900px_h-100_percent padding-top-12px'>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                ADRESE";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-address' value='$value3' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                TALRUNIS";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-phone' value='$value4' class='w-100_percent_h-50px padding_left'>";
    echo "        </div>";
    echo "    </div>";
    echo "    <div class='padding-bottom-25px'>";
    echo "        <div class='padding-bottom-2px'>";
    echo "            <h3 class='h3-size_20px'>";
    echo "                DARBA LAIKS";
    echo "            </h3>";
    echo "        </div>";
    echo "        <div>";
    echo "            <input type='text' id='contacts-work_time' value='$value2' class='w-100_percent_h-50px padding_left'>";
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
?>