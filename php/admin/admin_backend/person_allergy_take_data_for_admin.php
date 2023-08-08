<?php

$mysql = new mysqli('localhost','root','','fid_food_db');

$sql = "SELECT `nosaukums` FROM `alergija`";
$result = $mysql->query($sql);

while ($row = $result->fetch_assoc()) {
    $value =  ucfirst(strtolower($row['nosaukums']));

    echo '<div class="allergy_field w_and_h-auto div_display-flex padding-left-18px padding-top-6px">';
    echo '    <div>';
    echo '        <p class="p-font_size_28px">'. $value . '</p>';
    echo '    </div>';
    echo '    <div class="allergy_delete-btn div_display-flex">';
    echo '        <div class="div_display-flex_justify-content-center_align-items-center padding-0px-10px-0px"">';
    echo '            <img src="../../../img1/image_delete.png" alt="" class="cursor_pointer">';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}

$mysql->close();

?>