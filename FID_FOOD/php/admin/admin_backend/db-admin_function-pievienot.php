<?php

/*Пока не работает*/

if($_POST){
    

    $login = $gmail = filter_var(trim($_POST["sign-up-name"]), FILTER_SANITIZE_STRING);
    $gmail = filter_var(trim($_POST["sign-up-email"]), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST["sign-up-password"]), FILTER_SANITIZE_STRING);
    $password_confirmation = filter_var(trim($_POST["sign-up-password-confirmation"]), FILTER_SANITIZE_STRING);
    
    $mysql = new mysqli('localhost','root','','fid_food_db');

     $result = $mysql->query("SELECT * FROM `klients` 
    WHERE `gmail` = '$gmail' AND `parole` = '$password'");

    $user = $result->fetch_assoc();
    
    $ab = is_array($user) ? count($user) : 0 ;

    if($ab != 0){
        
        header('Location: login-sign_up.php');
        exit;
    }
}
?>