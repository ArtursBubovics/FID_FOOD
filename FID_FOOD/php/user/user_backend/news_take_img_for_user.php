<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `zinas_foto` FROM `zinas`";
$result = $mysql->query($sql);

while ($row = $result->fetch_assoc()) {
    $url = $row['zinas_foto'];
    echo "<div class='dicounts_news-body-cell'>";
    echo "<img class='dicounts_news-img' src='$url' alt=''>";
    echo "</div>";
}

$mysql->close();

?>