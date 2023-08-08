<?php

$userId = $_SESSION['userId'];

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `vards`, `gmail`, `talrunis`, `adrese` FROM `klients` WHERE KlientsID = $userId";

$result = $mysql->query($sql);

$row = $result->fetch_assoc();

$value1 =  $row['vards'];

$value2 =  $row['gmail'];

$value3 =  $row['talrunis'];

$value4 =  $row['adrese'];

echo '<div class="padding-right-20px w-350px_h-100_percent padding-top-10px">';
echo '<div>';
echo '<p class="p-font_size_22px">Vārds:</p>';
echo '</div>';
echo '<div>';
echo '<input type="fname" name="login" placeholder="Vārds" id="person_informations_name" class="w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" value="' . $value1 . '">';
echo '</div>';
echo '</div>';

echo '<div class="padding-right-20px w-350px_h-100_percent padding-top-10px">';
echo '<div>';
echo '<p class="p-font_size_22px">Epasts:</p>';
echo '</div>';
echo '<div>';
echo '<input type="email" name="gmail" placeholder="Pasts" id="person_informations_gmail" class="w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" value="' . $value2 . '">';
echo '</div>';
echo '</div>';
if($value3 === null){
    echo '<div class="padding-right-20px w-350px_h-100_percent padding-top-10px">';
    echo '<div>';
    echo '<p class="p-font_size_22px">Talrunis(nav obligāti):</p>';
    echo '</div>';
    echo '<div>';
    echo '<input type="tel" id="phone" class="person_informations_phone w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" name="phone" placeholder="Piemers: +371 23 145 678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required value="' . $value3 . '">';
    echo '</div>';
    echo '</div>';
}else{
    echo '<div class="padding-right-20px w-350px_h-100_percent padding-top-10px">';
    echo '<div>';
    echo '<p class="p-font_size_22px">Talrunis(nav obligāti):</p>';
    echo '</div>';
    echo '<div>';
    echo '<input type="tel" id="phone" class="person_informations_phone w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" name="phone" placeholder="Piemers: +371 23 145 678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required">';
    echo '</div>';
    echo '</div>';
}

if ($value4 === null) {
    echo '<div class="padding-right-20px w-350px_h-100_percent padding-top-10px">';
    echo '<div>';
    echo '<p class="p-font_size_22px">Adrese(nav obligāti):</p>';
    echo '</div>';
    echo '<div>';
    echo '<input type="text" id="address" class="person_informations_addrese w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" name="address" placeholder="Piemers: Krišjāņa Valdemāra iela" ">';
    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="padding-right-20px w-350px_h-100_percent padding-top-10px">';
    echo '<div>';
    echo '<p class="p-font_size_22px">Adrese(nav obligāti):</p>';
    echo '</div>';
    echo '<div>';
    echo '<input type="text" id="address" class="person_informations_addrese w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem" name="address" placeholder="Piemers: Krišjāņa Valdemāra iela" value="' . $value4 . '">';
    echo '</div>';
    echo '</div>';
}


$mysql->close();

?>