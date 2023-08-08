<?php

$empty = '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Выведите сообщение об ошибке или выполните другие действия в случае, если запрос не был отправлен методом POST
    echo 'Ошибка с получение POST';
    exit;
} else {
    // Получение данных из POST запроса
    $name = $_POST['input1'];
    $markup = $_POST['input2'];
    $main_foto = $_POST['input3'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    $checkQuery = "SELECT * FROM `ediens` WHERE nosaukums = ? AND  cena = ? AND foto = ?";
    $stmt = $mysql->prepare($checkQuery);
    $stmt->bind_param("sds", $name, $markup, $main_foto);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result && $result->num_rows == 0) {
        
        $sql = "INSERT INTO `ediens` (nosaukums, cena, foto) VALUES (?, ?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("sds", $name, $markup, $main_foto);

    }

    if ($stmt->execute()) {
        $lastInsertedId = $mysql->insert_id;
        $response = array('success' => true, 'lastInsertedId' => $lastInsertedId);
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'error' => $stmt->error);
        echo json_encode($response);
    }

    $stmt->close();
    $mysql->close();
}

?>