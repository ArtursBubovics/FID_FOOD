<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка с получение POST';
    exit;
} else {
    $lastInsertedId = $_POST['input1'];
    $settingsArray = $_POST['input2'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    // Создание пустого массива для хранения идентификаторов категорий
    $settingsIDs = array();

    // Обход значений массива allergyArray
    foreach ($settingsArray as $settingsName) {
        // Ищем идентификатор категории в таблице kategorija по названию категории
        $sql = "SELECT `StatusID` FROM `status` WHERE `nosaukums` = ?";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("s", $settingsName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            // Если найдено соответствие, добавляем идентификатор категории в массив
            $row = $result->fetch_assoc();
            $settingsID = $row['StatusID'];
            $settingsIDs[] = $settingsID;
        }
    }

    // Вставка идентификаторов категорий в таблицу ediens_alergija
    foreach ($settingsIDs as $settingsID) {
        $sql = "INSERT INTO `ediens_status` (EdiensID, StatusID) VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("ii", $lastInsertedId, $settingsID);
        $stmt->execute();
    }

    echo "Записи успешно добавлены";

    $mysql->close();
}

?>