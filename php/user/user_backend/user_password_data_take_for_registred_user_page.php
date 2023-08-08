<?php

$userId = $_SESSION['userId'];

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `parole` FROM `klients` WHERE KlientsID = $userId";

$result = $mysql->query($sql);

$row = $result->fetch_assoc();

$value1 =  $row['parole'];

echo '<div>';
echo '<input type="text" name="password" placeholder="Parole" value="' . $value1 . '" id="person_informations_password" class="js-password-input w-100_percent_h-50px padding_left placeholder-font-size_18px placeholder-transform-translateY_02rem">';
echo '</div>';


$mysql->close();

?>