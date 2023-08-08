<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка с получение POST';
    exit;
} else {
    $lastInsertedId = $_POST['input1'];
    $allergyArray = $_POST['input2'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    // Создание пустого массива для хранения идентификаторов категорий
    $allergyIDs = array();

    // Обход значений массива allergyArray
    foreach ($allergyArray as $allergyName) {
        // Ищем идентификатор категории в таблице kategorija по названию категории
        $sql = "SELECT `AlergijaID` FROM `alergija` WHERE `nosaukums` = ?";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("s", $allergyName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            // Если найдено соответствие, добавляем идентификатор категории в массив
            $row = $result->fetch_assoc();
            $allergyID = $row['AlergijaID'];
            $allergyIDs[] = $allergyID;
        }
    }

    // Вставка идентификаторов категорий в таблицу ediens_alergija
    foreach ($allergyIDs as $allergyID) {
        $sql = "INSERT INTO `ediens_alergija` (EdiensID, AlergijaID) VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("ii", $lastInsertedId, $allergyID);
        $stmt->execute();
    }

    echo "Записи успешно добавлены";

    $mysql->close();
}

?>