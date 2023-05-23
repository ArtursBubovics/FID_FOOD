

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
        $checkQuery = "SELECT akcijas_foto FROM akcijas WHERE akcijas_foto = '$imagePath'";
        $result = $mysql->query($checkQuery);


        if ($result && $result->num_rows > 0) {
            echo 'Путь к изображению уже существует в базе данных.';
        } else {
            if (move_uploaded_file($fileTmpName, $targetPath)) {
                // Сохраняем путь к файлу в базе данных

                $sql = "INSERT INTO akcijas (akcijas_foto) VALUES ('$imagePath')";

                if ($mysql->query($sql) === true) {
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
