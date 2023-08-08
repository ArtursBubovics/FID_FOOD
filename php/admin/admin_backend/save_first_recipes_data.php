<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка при получении POST-запроса';
    exit;
} else {
    $recipes_name = $_POST['recipes_name'];
    $cooking_time = $_POST['cooking_time'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    // Выполняем SELECT-запрос для получения EdiensID
    $saveQuery = "SELECT `EdiensID` FROM `ediens` WHERE nosaukums = ?";
    $stmt = $mysql->prepare($saveQuery);
    $stmt->bind_param("s", $recipes_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $EdiensID = $row['EdiensID']; // Сохраняем значение EdiensID

        // Выполняем INSERT-запрос с использованием сохраненного значения EdiensID
        $sql = "INSERT INTO recepte (gatavosanas_laiks, EdiensID) VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("ii", $cooking_time, $EdiensID);
        
        $stmt->execute(); 
        echo $stmt->insert_id;
    }else {
        echo 'Ошибка получения EdiensID';
    }
}
