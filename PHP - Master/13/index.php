<?php
$myArray = array(1, 2, 3, 4, 5);
$myArray2 = [1, 2, 3, 4, 5];
$myArray3 = array();
$myArray4 = [];
$fruites = ['Apple', 'Orange', 'Banans'];

/* All of Above Are indexed arrays */

//echo $fruites[2];
print_r($fruites);
var_dump($fruites);

pr($fruites);
vd($fruites);

function pr($param)
{
    echo "<pre style='background-color:black; color:gold; padding:5px;'>";
    print_r($param);
    echo "</pre>";
}

function vd($param)
{
    echo "<pre style='background-color:black; color:gold; padding:5px;'>";
    var_dump($param);
    echo "</pre>";
}