<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Выведите сообщение об ошибке или выполните другие действия в случае, если запрос не был отправлен методом POST
    echo 'Ошибка с получение POST';
    exit;
} else {
    // Получение данных из POST запроса
    $admin_name = $_POST['input1'];
    $admin_password = $_POST['input2'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    // Используем подготовленные выражения
    $stmt = $mysql->prepare("SELECT vards, parole FROM `administrators` WHERE `vards` = ? AND  `parole` = ?");
    $stmt->bind_param("ss", $admin_name, $admin_password);
    $stmt->execute();
    $result = $stmt->get_result();

    $found = false;

    while ($row = $result->fetch_assoc()) {
        if ($admin_name == $row['vards'] && $admin_password == $row['parole']) {
            $found = true;
        }
    }

    if ($found) {
        $response = array('status' => 'success', 'message' => 'Данные существуют');
        echo json_encode($response);
        exit; // Добавьте эту строку, чтобы прекратить выполнение скрипта после отправки ответа
    } else {
        $response = array('status' => 'error', 'message' => 'Данные не найдены');
        echo json_encode($response);
        exit; // Добавьте эту строку, чтобы прекратить выполнение скрипта после отправки ответа
    }

    $stmt->close();
    $mysql->close();
}


?>