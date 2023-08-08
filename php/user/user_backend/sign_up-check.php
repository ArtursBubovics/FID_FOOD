<?php
session_start();

$errors = [];

$mysql = new mysqli('localhost', 'root', '', 'fid_food_db');

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$gmail = filter_var(trim($_POST["gmail"]), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
$password_confirmation = filter_var(trim($_POST["password_confirmation"]), FILTER_SANITIZE_STRING);

$check_sign_up = mysqli_query($mysql, "SELECT * FROM `klients` WHERE `vards` = '$login' AND `gmail` = '$gmail' AND `parole` = '$password'");
if (mysqli_num_rows($check_sign_up) > 0) {
    $response = [
        "status" => false,
        "message" => "Такой пользователь уже существует"
    ];
    echo json_encode($response);
    die();
}

if ($login == "") {
    $errors[] = "login";
}
if ($gmail == "") {
    $errors[] = "gmail";
}
if ($password == "") {
    $errors[] = "password";
}
if ($password_confirmation == "") {
    $errors[] = "password_confirmation";
}

if ($gmail != "") {
    if ($password === $password_confirmation) {

        if (empty($errors)) {
            // $password = password_hash($password, PASSWORD_DEFAULT);

            if ($mysql->query("INSERT INTO `klients` (`vards`, `gmail`, `parole`,`talrunis`,`adrese`,`KontaktsID`, `AkcijasID`, `ZinasID`) VALUES('$login', '$gmail', '$password',NULL,NULL, 1, 1, 1)")) {
                $userId = $mysql->insert_id;

                $_SESSION['userId'] = $userId;
                $response = [
                    "status" => true,
                    "message" => "Reģistrācija veiksmīgi pabeigta",
                ];

                echo json_encode($response);
            } else {
                // Ошибка при выполнении запроса
                echo "Ошибка: " . $mysql->error;
            }
        } else {
            $response = [
                "status" => false,
                "type" => 1,
                "message" => "Ievadiet visus laukus",
                "fields" => $errors
            ];

            echo json_encode($response);
        }
    } else {
        $response = [
            "status" => false,
            "message" => "Parole neatbilst"
        ];

        echo json_encode($response);
    }
} else {
    $response = [
        "status" => false,
        "message" => "Nepareizi ievadīts e-pasts"
    ];

    echo json_encode($response);
}
$mysql->close();
