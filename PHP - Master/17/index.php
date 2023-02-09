<?php
// OOP stands for Object-Oriented Programming
// 1- functions types
// 2- class objects

//$x = 'Hello';
//echo $x;

function y()
{
    $x = 'hi';
    //echo $x;
    //return $x;
}

//y();
//$z = y();
//echo $z;

function xz($word)
{
    return "hello " . $word . PHP_EOL;
}
$name = 'Aladdin';
$z = xz($name);
//xz('PHP');
echo $z;
