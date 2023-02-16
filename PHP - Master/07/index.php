<?php

// ucwords(string)                  لتحويل اول حرف من كل كلمة إلى حرف كبير
// strtoupper (string)                      لتحويل احرف النص إلى احرف كبيرة
// strtolower (string)                      لتحويل احرف النص إلى احرف صغيرة

include('./mytools.php');
/* $test = "Hello PHP";
echo $test . "<br>";
$test_UC = strtoupper($test);
echo $test_UC . "<br>";
$test_lc = strtolower($test);
echo $test_lc . "<br>";
$test_first_letter_u = ucwords($test);
echo $test_first_letter_u . "<br>"; */
//==================================

/* How to fix name case */
echo "=========================== <br>";
/* $name1 = "aladdin sAmi";
$name2 = "aladdin sAmy";
echo $name1 . "<br>"; */
// echo ucwords(strtolower($name));

//============================

/* Function */
?>
<form action="" method="get">
    <input type="text" name="agencyname" id="" placeholder="Academy Name .. ">
    <input type="text" name="fullname" id="" placeholder="Enter your fullname . . .">
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_GET['fullname']) && isset($_GET['agencyname'])) {
    //echo $_GET['fullname'];
    $tudentname = fix_name($_GET['fullname']);
    $academyname = strtoupper(fix_name($_GET['agencyname']));
    echo $tudentname . "<br>";
    echo $academyname . "<br>";
}


// fix_name($name2);