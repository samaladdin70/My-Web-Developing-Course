<?php

include_once('./Tools.php');
include_once('./ConnectModel.php');


if (isset($_GET['submit'])) {
    $connect = new ConnectModel();
    if (isset($_GET['status'])) {
        $query = "UPDATE tasks SET name=?, status=1 WHERE id = ?";
    } else {
        $query = "UPDATE tasks SET name=?, status=0 WHERE id = ?";
    }

    $update = $connect->data($query, [$_GET['name'], $_GET['id']]);
    if ($update) {
        header("Location: ../");
    }
} else {
    //
}
