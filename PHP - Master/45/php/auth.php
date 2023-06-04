<?php

include_once('./Tools.php');
include_once('./ConnectModel.php');
if (isset($_GET['submit'])) {
    $connect = new ConnectModel();
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $output = $connect->selectOne($query, [$_GET['email'], $_GET['password']]);
    if (is_array($output)) {
        session_start();
        $_SESSION['name'] = $output['fullname'];
        header("Location: ../");
    } else {
        session_unset();
        session_start();
        $_SESSION['err_login'] = 'You Are Not Registered';
        header('Location: ../login.php');
    }
} else {
    # code...
}