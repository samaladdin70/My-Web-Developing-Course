<?php
include_once('./arrayTools.php');
// api stands for Application programming interface
header('Content-Type: application/json; charset=utf-8');

$users =
    [
        ["id" => 1, 'name' => "Aladdin", "email" => "example1@mail.com"],
        ["id" => 2, 'name' => "Joe's", "email" => "example2@mail.com"],
        ["id" => 3, 'name' => "Mohammed", "email" => "exampl3e@mail.com"]
    ];

// json 

$usersJson = json_encode($users);

print_r($usersJson);