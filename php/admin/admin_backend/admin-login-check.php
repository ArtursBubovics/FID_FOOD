<?php


    $errors = [];

    $mysql = new mysqli('localhost','roor','','fid_food_db');

    $admin_sign_in_name = filter_var(trim($_POST["admin_sign_in_name"]), FILTER_SANITIZE_STRING);
    $admin_sign_up_password_1 = filter_var(trim($_POST["admin_sign_up_password_1"]), FILTER_SANITIZE_STRING);
    $admin_sign_up_password_2 = filter_var(trim($_POST["admin_sign_up_password_2"]), FILTER_SANITIZE_STRING);

   

    if($admin_sign_in_name == ""){
        $errors[] = "admin_sign_in_name";
    }
    if($admin_sign_up_password_1 == ""){
        $errors[] = "admin_sign_up_password_1";
    }
    if($admin_sign_up_password_2 == ""){
        $errors[] = "admin_sign_up_password_2";
    }

            if(empty($errors)){
                $check_admin_login = mysqli_query($mysql, "SELECT  `ADMIN_LOGIN` FROM `admin` WHERE `ADMIN_LOGIN` = '$admin_sign_in_name'");
                $check_parole1 = mysqli_query($mysql, "SELECT  `ADMIN_PAROLE_1` FROM `admin_parole` WHERE `ADMIN_PAROLEID` = '1' ");
                $check_parole2 = mysqli_query($mysql, "SELECT  `ADMIN_PAROLE_2` FROM `admin` WHERE `ADMIN_LOGIN` = '$admin_sign_in_name'");
                if($admin_sign_in_name == $check_admin_login){
                    if((admin_sign_up_password_1 == $check_parole1)){

                        if($admin_sign_up_password_2 == $check_parole2){
                        $check_sign_up = mysqli_query($mysql, "SELECT * FROM `admin` WHERE `ADMIN_LOGIN` = '$admin_sign_in_name' AND `ADMIN_PAROLE` = '$admin_sign_up_password_1'");

                            if(mysqli_num_rows($check_sign_up) != 0){
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
                                "message" => "Нету такого админа"
                            ];
                            echo json_encode($response_login);
                        }
                    }else{
                        $response_login = [
                            "status" => false,
                            "message" => "Не правельный пароль 1"
                        ];
                        echo json_encode($response_login);
                    }
                }else{
                    $response_login = [
                            "status" => false,
                            "message" => "Не правельный логин"
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