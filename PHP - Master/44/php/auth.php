<?php

if (isset($_GET['submit'])) {
    session_start();
    if ($_GET['email'] == 'test@mail.com' && $_GET['password'] == '1234') {
        $_SESSION['name'] = 'Aladdin';
        header("Location: ../");
    } else {
        session_unset();
        header('Location: ../login.php');
    }
}
