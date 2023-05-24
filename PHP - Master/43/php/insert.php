<?php

include_once('./Tools.php');

if (isset($_GET['submit'])) {
    include_once('./ConnectModel.php');
    $connect = new ConnectModel();
    $connect->table('tasks');
    $data = ['name' => $_GET['name']];
    $output = $connect->add($data);
    if ($output) {
        header("Location: ../");
    }
} else {
    echo "<h1 style='color:red;'>Not Found</h1>";
}
