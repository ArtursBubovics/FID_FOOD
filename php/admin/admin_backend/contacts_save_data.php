<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Выведите сообщение об ошибке или выполните другие действия в случае, если запрос не был отправлен методом POST
    echo 'Ошибка с получение POST';
    exit;
} else {
    // Получение данных из POST запроса
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];

    $input5 = $_POST['input5'];
    $input6 = $_POST['input6'];
    $input7 = $_POST['input7'];

    $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');
    if ($mysql->connect_error) {
        die("Ошибка подключения к базе данных: " . $mysql->connect_error);
    }

    $checkQuery = "SELECT * FROM `kontakts`";
    $result = $mysql->query($checkQuery);

    $one_value = 1;
    $null_value = "";
    if ($result && $result->num_rows > 0) {
        echo 'Путь к изображению уже существует в базе данных.';
        $sql = "UPDATE kontakts SET facebook_link = ?, twitter_link = ?, instagram_link = ? WHERE KontaktsID = 1";

        $stmt = $mysql->prepare($sql);

        $stmt->bind_param("sss",$input5, $input6, $input7);

        $stmt->execute(); 
        

    } else {
        // Вставка данных в базу данных    

        $sql = "INSERT INTO kontakts (KontaktsID, foto, facebook_link, twitter_link, instagram_link)
            VALUES (?, '', ?, ?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("issss", $one_value, $input1, $input5, $input6, $input7);
        
        $stmt->execute(); 


        $sql = "INSERT INTO darba_laiks (laiks, KontaktsID )
            VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("si",$input3, $one_value);
    
        $stmt->execute(); 

        $sql = "INSERT INTO adrese (adrese, KontaktsID)
            VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("si", $input1, $one_value);

        $stmt->execute();

        $sql = "INSERT INTO talrunis (talrunis, KontaktsID)
            VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("si", $input2, $one_value);

        $stmt->execute(); 

        $sql = "INSERT INTO pasts (pasts, KontaktsID)
            VALUES (?, ?)";
        $stmt = $mysql->prepare($sql);
        $stmt->bind_param("si", $input4, $one_value);

        $stmt->execute(); 
    }

    if ($stmt->execute()) {
        echo "Данные успешно добавлены в базу данных";
    } else {
        echo "Ошибка при добавлении данных в базу данных: " . $stmt->error;
    }

    $stmt->close();
    $mysql->close();
}
