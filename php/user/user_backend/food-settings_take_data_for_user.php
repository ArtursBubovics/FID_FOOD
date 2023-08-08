<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `nosaukums` FROM `status`";
$result = $mysql->query($sql);

while ($row = $result->fetch_assoc()) {
    $value =  ucfirst(strtolower($row['nosaukums']));

    echo '<div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter padding-bottom-15px">';
    echo '    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter-name">';
    echo '        <p class="p-font_size_22px">'. $value .'</p>';
    echo '    </div>';
    echo '    <div class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter-btn_div">';
    echo '        <button class="izvelnes_iestatijumi-settings-right_return_div-body-filter_group-bottom-filter-btn_div-btn"></button>';
    echo '    </div>';
    echo '</div>';
    
}

$mysql->close();

?>