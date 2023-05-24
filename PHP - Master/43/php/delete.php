<?php
include_once('./Tools.php');
include_once('./ConnectModel.php');

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        $connect = new ConnectModel();
        $connect->table('tasks');
        $delete = $connect->delete($_GET['id']);
        if ($delete) {
            header("Location: ../");
        }
    }
}
