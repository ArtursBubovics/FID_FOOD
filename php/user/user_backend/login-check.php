<?php
session_start();

    $errors = [];

    $mysql = new mysqli('localhost','root','','fid_food_db');

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
                    $check_sign_up = mysqli_query($mysql, "SELECT `KlientsID` FROM `klients` WHERE `gmail` = '$signin_gmail' AND `parole` = '$signin_password'");

                    if(mysqli_num_rows($check_sign_up) == 0){
                        $response_login = [
                            "status" => false,
                            "message" => "Šis lietotājs neeksistē"
                        ];
                        echo json_encode($response_login); 
                        die();
                    }else{
                        
                        $row = mysqli_fetch_assoc($check_sign_up);
                        $userId = $row['KlientsID'];
                        $_SESSION['userId'] = $userId;

                        $response_login = [
                            "status" => true,
                            "message" => "Reģistrācija veiksmīgi pabeigta"
                        ];
                        echo json_encode($response_login);

                        die();
                        
                    }

                }else{
                    $response_login = [
                            "status" => false,
                            "message" => "Nepareizi ievadīts e-pasts"
                        ];
                        echo json_encode($response_login);
                }

            }else{
                
                $response_login = [
                    "status" => false,
                    "type" => 1,
                    "message" => "Ievadiet visus laukus",
                    "fields" => $errors
                ];

                echo json_encode($response_login);
                die();
            } 
            








    $mysql->close();
