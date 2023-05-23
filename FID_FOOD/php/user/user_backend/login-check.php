<?php


    $errors = [];

    $mysql = new mysqli('localhost','roor','','fid_food_db');

    $signin_gmail = filter_var(trim($_POST["signin_gmail"]), FILTER_SANITIZE_STRING);
    $signin_password = filter_var(trim($_POST["signin_password"]), FILTER_SANITIZE_STRING);

   

    if($signin_gmail == ""){
        $errors[] = "signin_gmail";
    }
    if($signin_password == ""){
        $errors[] = "signin_password";
    }

            if(empty($errors)){

                if(filter_var($signin_gmail, FILTER_VALIDATE_EMAIL)){
                    $check_sign_up = mysqli_query($mysql, "SELECT * FROM `klients` WHERE `gmail` = '$signin_gmail' AND `parole` = '$signin_password'");

                    if(mysqli_num_rows($check_sign_up) == 0){
                        $response_login = [
                            "status" => false,
                            "message" => "Такой пользователь не существует"
                        ];
                        echo json_encode($response_login); 
                        die();
                    }else{
                        $response_login = [
                            "status" => true,
                            "message" => "Регестрация прошла успешно"
                        ];
                        echo json_encode($response_login);

                        die();
                        
                    }

                }else{
                    $response_login = [
                            "status" => false,
                            "message" => "Не правльно введена почта"
                        ];
                        echo json_encode($response_login);
                }

            }else{
                
                $response_login = [
                    "status" => false,
                    "type" => 1,
                    "message" => "Введи все поля",
                    "fields" => $errors
                ];

                echo json_encode($response_login);
                die();
            } 
            








    $mysql->close();

?>