<?php

    $errors = [];

    $mysql = new mysqli('localhost','root','','fid_food_db');

    $login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
    $gmail = filter_var(trim($_POST["gmail"]), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
    $password_confirmation = filter_var(trim($_POST["password_confirmation"]), FILTER_SANITIZE_STRING);

    $check_sign_up = mysqli_query($mysql, "SELECT * FROM `klients` WHERE `logins` = '$login' AND `gmail` = '$gmail' AND `parole` = '$password'");
    if(mysqli_num_rows($check_sign_up) > 0){
        $response = [
                "status" => false,
                "message" => "Такой пользователь уже существует"
            ];
        echo json_encode($response);
        die();
    }

    if($login == ""){
        $errors[] = "login";
    }
    if($gmail == ""){
        $errors[] = "gmail";
    }
    if($password == ""){
        $errors[] = "password";
    }
    if($password_confirmation == ""){
        $errors[] = "password_confirmation";
    }

if($gmail != ""){
    if($password === $password_confirmation){

        if(empty($errors)){
            // $password = password_hash($password, PASSWORD_DEFAULT);

            $mysql->query("INSERT INTO `klients` (`logins`, `gmail`, `parole`) VALUES('$login', '$gmail', '$password')");

            $response = [
                "status" => true,
                "message" => "Регестрация прошла успешно",
            ];

            echo json_encode($response);

            $mail =  $gmail;
            $subject = "Laipni lūdzam FID FOOD!";
            $txt = "Sveiki! Mēs esam priecīgi sveikt jūs mūsu vietnē";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From: <webmaster@example.com>' . "\r\n";
            $headers .= 'Cc: myboss@example.com' . "\r\n";
            mail($mail, $subject, $txt, $headers);
        }else{
            $response = [
                "status" => false,
                "type" => 1,
                "message" => "Введи все поля",
                "fields" => $errors
            ];

            echo json_encode($response);

        } 
    }else{
        $response = [
            "status" => false,
            "message" => "Пароль не совпадают"
        ];

        echo json_encode($response);
    }
}else{
     $response = [
        "status" => false,
        "message" => "Не правльно введена почта"
    ];

    echo json_encode($response);
}
    $mysql->close();

?>