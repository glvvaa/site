<?php
session_start();
require_once ('connect.php');


$login = $_POST ['login'];
$password = ($_POST['password']);

$error_fields = [];

if ($login === '') {
    $error_fields [] = 'login';
}

if ($password === '') {
    $error_fields [] = 'password';

}


    if (!empty($error_fields)) {

        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Глаза разуй, чудище",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die ();
    }

    $password = md5($password);

    $connect = mysqli_connect('localhost', 'root', '', 'vlad_test');
    if (!$connect) {
        die ('error connect to DataBase');
    }

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`= '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user)) {

        $user = mysqli_fetch_assoc($check_user);


        $_SESSION ['user'] = [
            "id" => $user ['id'],
            "full name" => $user ['full_name'],
            "avatar" => $user ['avatar'],
            "email" => $user ['email']
        ];

        $response = [
            "status" => true
        ];

        echo json_encode($response);

    } else {

        $response = [
            "status" => false,
            "message" => 'Ты что-то явно не то ввел'
        ];

        echo json_encode($response);
}
     ?>
