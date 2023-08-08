<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка с получение POST';
    exit;
} else {
    $lastInsertedId = $_POST['input1'];
    $imagePathArray = $_POST['input2'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    // Обход значений массива imagePathArray
    foreach ($imagePathArray as $imagePath) {
        // Вставка значения из массива imagePathArray в таблицу papildu_foto
        $sql = "INSERT INTO `papildu_foto` (foto, EdiensID) VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("si", $imagePath, $lastInsertedId);
        $stmt->execute();
    }

    echo "Записи успешно добавлены2";

    $mysql->close();
}

?>