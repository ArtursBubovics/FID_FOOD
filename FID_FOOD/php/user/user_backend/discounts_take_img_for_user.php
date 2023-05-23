<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `akcijas_foto` FROM `akcijas`";
$result = $mysql->query($sql);

while ($row = $result->fetch_assoc()) {
    $url = $row['akcijas_foto'];
    echo "<div class='dicounts_news-body-cell'>";
    echo "<img class='dicounts_news-img' src='$url' alt=''>";
    echo "</div>";
}

$mysql->close();

?>