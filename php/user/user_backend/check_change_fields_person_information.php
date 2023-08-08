<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Ошибка при получении POST-запроса';
    exit;
} else {
    $person_informations_name = $_POST['input1'];
    $person_informations_gmail = $_POST['input2'];
    $person_informations_phone = $_POST['input3'];
    $person_informations_addrese = $_POST['input4'];
    $person_informations_password = $_POST['input5'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    $saveQuery = "SELECT `vards`, `gmail`, `parole`, `talrunis`, `adrese` FROM `klients` WHERE vards = ? AND gmail = ? AND parole = ?";

    // Динамически формируем запрос на основе текущих значений
    $params = array($person_informations_name, $person_informations_gmail, $person_informations_password);
    $types = "sss";

    if (!empty($person_informations_phone)) {
        $saveQuery .= " AND talrunis = ?";
        $params[] = $person_informations_phone;
        $types .= "s";
    }

    if (!empty($person_informations_addrese)) {
        $saveQuery .= " AND adrese = ?";
        $params[] = $person_informations_addrese;
        $types .= "s";
    }

    $stmt = $mysql->prepare($saveQuery);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        echo 'Путь к изображению уже существует в базе данных.';
        $updateQuery = "UPDATE klients SET vards = ?, gmail = ?, parole = ?, talrunis = ?, adrese = ? WHERE vards = ? AND gmail = ? AND parole = ?";

        // Динамически формируем запрос на основе текущих значений
        $params[] = $person_informations_name;
        $params[] = $person_informations_gmail;
        $params[] = $person_informations_password;

        $types .= "sss";

        if (!empty($person_informations_phone)) {
            $updateQuery .= " AND talrunis = ?";
            $params[] = $person_informations_phone;
            $types .= "s";
        }

        if (!empty($person_informations_addrese)) {
            $updateQuery .= " AND adrese = ?";
            $params[] = $person_informations_addrese;
            $types .= "s";
        }

        $stmt = $mysql->prepare($updateQuery);
        $stmt->bind_param($types, ...$params);

        if ($stmt->execute()) {
            echo "Данные успешно добавлены в базу данных";
        } else {
            echo "Ошибка при добавлении данных в базу данных: " . $stmt->error;
        }
    } else {
        echo "Запись не найдена в базе данных.";
    }

    $stmt->close();
    $mysql->close();
}
