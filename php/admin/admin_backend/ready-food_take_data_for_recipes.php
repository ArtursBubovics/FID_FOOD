<?php
// Подключение к базе данных
$mysql = new mysqli('localhost','root','','fid_food_db');

if ($mysql->connect_error) {
    die('Ошибка подключения к базе данных: ' . $mysql->connect_error);
}

// Запрос на выборку всех значений из таблицы
$sql = "SELECT `nosaukums` FROM `ediens`";
$result = $mysql->query($sql);

// Создание поля <select> и заполнение его значениями из базы данных
echo '<select id="ready_foods" class="w-100_percent_h-30px">';
while ($row = $result->fetch_assoc()) {
    $value = $row['nosaukums'];
    echo '<option value="' . $value . '">' . $value . '</option>';
}
echo '</select>';

// Закрытие соединения с базой данных
$mysql->close();
?>
