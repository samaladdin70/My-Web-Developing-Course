<?php
include_once('./arrayTools.php');
$jsonGet = file_get_contents('./api.json');
$myArray = json_decode($jsonGet);

foreach ($myArray as $value) {
    unset($myArray[count($myArray) - 1]);
}

$newArray = array_values($myArray);
$newArray = json_encode($newArray);
file_put_contents('./api.json', $newArray);
header('Location: index.php');