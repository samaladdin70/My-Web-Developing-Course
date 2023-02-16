<?php

// strpos (string , search text )            لبحث عن نص ضمن النص الذي تحدده
// stripos (string , search text )             دون النظر لحالة الاحرف لبحث عن نص ضمن النص الذي تحدده
// strrpos (string , search lastText) لبحث عن نص ضمن النص الذي تحدده من الاخر
// substr(string,start,length)        لقطع جزء من النص حسب تمركز الذي تحدده
// str_replace (old text , new text , string)   استبدال النص ضمن النص المحدد
//==================================================================

// explode(delemeter, string)  يقوم بتحويل بيانات من نوع النصي إلى بيانات من نوع ارراي 
// implode(separator, array)  يقوم بتحويل بيانات من نوع ارراي إلى بيانات من نوع النصي

$hello = "Hello World! and hello PHP, and Hello again.";
$search = "php";
// echo strrpos(strtolower($hello), strtolower($search));
//echo stripos($hello, $search, 0);
echo "<br> ============================ <br>";
//var_dump(stripos($hello, $search, 0));
echo "<br> ============================ <br>";

/* 
strpos()
strrpos()
stripos()
strripos()
لها 2 براميتر اساسية للتمرير
لها براميتر ثالث optional
اسمه offset
*/

//strpos($string, $search, offset)
//strrpos($string, $search, offset)
//stripos($string, $search, offset)
//strripos($string, $search, offset)
// ===============================================

// strlen()
//echo strlen($hello);
$counter = 0;
while ($counter <= strlen($hello)) {

    $position = stripos($hello, $search, $counter);

    if ($position === false) {
        break;
    } else {
        $pos[] = $position;
        echo $position . "<br>";
        $counter = $position + 1;
    }
}
echo "Number of Natches: " . count($pos);
//var_dump($pos);