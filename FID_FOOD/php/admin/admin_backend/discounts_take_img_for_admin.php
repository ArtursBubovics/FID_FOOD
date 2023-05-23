<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `akcijas_foto` FROM `akcijas`";
$result = $mysql->query($sql);

while ($row = $result->fetch_assoc()) {
    $url = $row['akcijas_foto'];
    echo "<div class='dicounts_news-body-cell'>";
        echo "<div class='div-positon_relative'>";
        echo "<img class='dicounts_news-img' src='$url' alt=''>";

            echo "<div class='div-position_absolute-top_0-right_0 padding-top-18px padding-right-18px cursor_pointer'>";
            echo "<img src='../../../img1/image_delete.png'' alt=''>";
            echo "</div>";

        echo "</div>";    
    echo "</div>";
}

$mysql->close();

?>