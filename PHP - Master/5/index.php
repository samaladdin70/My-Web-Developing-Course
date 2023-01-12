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

// isset(); للتحقق من وجود المتغير من عدمه
//$password = '1234';
//$email = 'test@email.com';

// $usr = array(1,'name', 'email', 1234);

//

//var_dump(isset($password););
?>

<form action="">
    <div>
        <input type="email" name="email" id="" placeholder="example@mail.com" required>
    </div>
    <div style="margin-top: 5px; margin-bottom:5px;">
        <input type="password" name="pass" id="" placeholder="password . . ." required>
    </div>
    <button type="submit">Login</button>
</form>

<?php
// $_GET
/* echo "<pre>";
var_dump($_GET);
echo "</pre>"; */

$user =
    [
        'id' => 1,
        'name' => 'Aladdin',
        'email' => 'test@email.com',
        'password' => '1234'
    ];

if (isset($_GET['pass']) && isset($_GET['email'])) {
    if ($_GET['email'] === $user['email'] && $_GET['pass'] === $user['password']) {
        echo "<h1>You are Admin MR: " . $user['name'] . "</h1>";
    } else {
        echo "<h1 style='color:red;'>You are not admin</h1>";
    }
}