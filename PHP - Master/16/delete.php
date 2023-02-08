<?php
include_once('./arrayTools.php');
$key = intval($_GET['key']);
//vd($key);
$jsonGet = file_get_contents('./api.json');
$myArray = json_decode($jsonGet);

//pr($myArray);
unset($myArray[$key]);
$newArray = array_values($myArray);
//pr($newArray);

$newArray = json_encode($newArray);
file_put_contents('./api.json', $newArray);
header('Location: index.php');