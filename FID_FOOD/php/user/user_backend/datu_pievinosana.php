<?php

 $mysql = new mysqli('localhost','roor','','fid_food_db');

$sql = "SELECT * FROM `ediens`";
if($result = mysqli_query($mysql, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Имя</th><th>Возраст</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} 
?>