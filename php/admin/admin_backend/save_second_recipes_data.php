<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка при получении POST-запроса';
    exit;
} else {
    $data = json_decode($_POST['data'], true);

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    $RecepteID = $_POST['RecepteID'];

    foreach ($data as $row) {
        $name = $row['name'];
        $calories = $row['calories'];
        $protein = $row['protein'];
        $fat = $row['fat'];
        $carbohydrates = $row['carbohydrates'];
        $measurement = $row['measurement'];
        $price = $row['price'];

        $quantity = $row['quantity'];

        // Выполняем INSERT-запрос для каждой строки данных
        $sql = "INSERT INTO produkts (nosaukums, kalorijas, olbaltumvielas, tauki, ogļhidrāts, mervirniba, cena)  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("sddddsd", $name, $calories, $protein, $fat, $carbohydrates, $measurement, $price);
        $stmt->execute();
        $ProduktsID = $stmt->insert_id;

        $sql = "INSERT INTO produkts_recepte (daudzums, ProduktsID, RecepteID) VALUES (?, ?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("iii", $quantity, $ProduktsID, $RecepteID);
        $stmt->execute();
    }

    echo 'Данные сохранены успешно';
}
