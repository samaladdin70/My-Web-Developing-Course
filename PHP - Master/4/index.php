<?php
/* comparison operators */
// is equal ==
// is identical ===
// != not equal
// !== not identical
// > greater than
// >= greater than or equal
// < less than 
// <= less than or equal

// ================================================

/* هذه المحاضرة */

/* arithmatic operators */
// + plus
// - minus
// * prodduct by
// / division
// % moduls


// . عامل اللصق

/* logic operators */
// and &&  و
// or ||  أو
// xor   أو حصري
// !   not

// ======================================================


$password = '1234';
$email = 'test@email.com';

// $usr = array(1,'name', 'email', 1234);

//

$user =
    [
        'id' => 1,
        'name' => 'Aladdin',
        'email' => 'test@email.com',
        'password' => '1234'
    ];

if ($email === $user['email'] && $password === $user['password']) {
    echo "<h1>You are Admin MR: " . $user['name'] . "</h1>";
} else {
    echo "<h1 style='color:red;'>You are not admin</h1>";
}