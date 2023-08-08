<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Выведите сообщение об ошибке или выполните другие действия в случае, если запрос не был отправлен методом POST
    echo 'Ошибка с получение POST';
    exit;
} else {
    // Получение данных из POST запроса
    $input = $_POST['inputValue'];


    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    $checkQuery = "SELECT * FROM `alergija` WHERE nosaukums = ?";
    $stmt = $mysql->prepare($checkQuery);
    $stmt->bind_param("s", $input);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result && $result->num_rows > 0) {
        echo "Срока с таким статусом уже существует";
    } else {
        
        $sql = "INSERT INTO `alergija` (nosaukums) VALUES (?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("s", $input);

    }

    if ($stmt->execute()) {
        echo "Данные успешно добавлены в базу данных";
    } else {
        echo "Ошибка при добавлении данных в базу данных: " . $stmt->error;
    }

    $stmt->close();
    $mysql->close();
}

?>