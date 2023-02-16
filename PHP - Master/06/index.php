<?php
// -------------------------------- 1 ---------------------------------------
// strlen(string)                                        الحصول على طول النص
// str_word_count(string)                   حساب عدد الكلمات في النص المحدد
// strrev (string)                                                   عكس النص
// trim()                                   لحذف فرغات في بداية ونهاية النص
// ltrim()                                        لحذف فراغات في بداية النص
// rtrim()                                        لحذف فراغات في نهاية النص

$test = ' Hello World ';
echo $test . "<br>";
$length = strlen($test);
$length_after_trim = strlen(trim($test));
echo $length . "<br>";
echo $length_after_trim . "<br>";
$test_word_count = str_word_count($test);
echo $test_word_count . " number of words <br>";
echo strrev($test);