<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка с получение POST';
    exit;
} else {
    $lastInsertedId = $_POST['input1'];
    $categoriesArray = $_POST['input2'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    // Создание пустого массива для хранения идентификаторов категорий
    $categoryIDs = array();

    // Обход значений массива categoriesArray
    foreach ($categoriesArray as $categoryName) {
        // Ищем идентификатор категории в таблице kategorija по названию категории
        $sql = "SELECT `KategorijaID` FROM `kategorija` WHERE `nosaukums` = ?";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("s", $categoryName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            // Если найдено соответствие, добавляем идентификатор категории в массив
            $row = $result->fetch_assoc();
            $categoryID = $row['KategorijaID'];
            $categoryIDs[] = $categoryID;
        }
    }

    // Вставка идентификаторов категорий в таблицу ediens_kategorija
    foreach ($categoryIDs as $categoryID) {
        $sql = "INSERT INTO `ediens_kategorija` (EdiensID, KategorijaID) VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("ii", $lastInsertedId, $categoryID);
        $stmt->execute();
    }

    echo "Записи успешно добавлены.11";

    $mysql->close();
}

?>