<?php
// Подключение к базе данных и необходимые настройки

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Выведите сообщение об ошибке или выполните другие действия в случае, если запрос не был отправлен методом POST
    echo 'Ошибка с получение POST';
    exit;
} else {
    // Получение данных из POST запроса  
    $divIndex = $_POST['divIndex'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    $sql = "DELETE FROM `zina` WHERE `ZinasID` = '$divIndex'";
    $result = $mysql->query($sql);

    $mysql->close();

    if ($result) {
        // Успешное удаление записи
        echo "Success";
    } else {
        // Ошибка удаления записи
        echo "Error";
    }
}
