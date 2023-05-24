<?php

include_once('./Tools.php');
include_once('./ConnectModel.php');

if (isset($_GET['id'])) {
    $connect = new ConnectModel();
    $query = "UPDATE tasks SET status=? WHERE id=?";
    $update = $connect->data($query, [$_GET['status'], $_GET['id']]);
} else {
    // echo "none";
}
