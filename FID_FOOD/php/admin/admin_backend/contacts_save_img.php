

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['imageFile'])) {
        $imageFolder = '/FID_FOOD/img1/';
        $file = $_FILES['imageFile'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $imagePath = $imageFolder . $fileName;
        $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/' . $imagePath;

        $mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

        if ($mysql->connect_errno) {
            echo 'Не удалось подключиться к MySQL: ' . $mysql->connect_error;
            exit;
        }

        $imagePath = $mysql->real_escape_string($imagePath); //real_escape_string nodrošina datu drošību un novērš SQL injekcijas
        $checkQuery = "SELECT * FROM kontakts";
        $result = $mysql->query($checkQuery);

        $one_value = 1;

        if ($result && $result->num_rows > 0) {
            echo 'Путь к изображению уже существует в базе данных.';

            $sql = "UPDATE kontakts SET foto = ? WHERE KontaktsID = 1";

            $stmt = $mysql->prepare($sql);

            $stmt->bind_param("s", $imagePath);

            $stmt->execute(); 

            if ($stmt->affected_rows > 0) {
                echo 'Путь к изображению успешно обновлен в базе данных.';
            } else {
                echo 'Ошибка при обновлении пути к изображению: ' . $stmt->error;
            }
        } else {
            if (move_uploaded_file($fileTmpName, $targetPath)) {
                // Сохраняем путь к файлу в базе данных


                $sql = "INSERT INTO kontakts (KontaktsID, foto)
                VALUES (?, ?)";

                $stmt = $mysql->prepare($sql);
                
                $stmt->bind_param("is", $one_value, $imagePath);

                $stmt->execute(); 

                if ($stmt->affected_rows > 0) {
                    echo 'Путь к изображению успешно сохранен в базе данных.';
                } else {
                    echo 'Ошибка при сохранении пути к изображению: ' . $mysql->error;
                }
            } else {
                echo 'Ошибка при перемещении загруженного файла.';
            }
        }
        $mysql->close();
    } else {
        echo 'Файл изображения не найден.';
    }
} else {
    echo 'Неверный метод запроса.';
}

?>
