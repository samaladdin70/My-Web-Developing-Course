<?php
include_once('./Tools.php');
include_once('./ConnectModel.php');

/* $test = new ConnectModel();
$test2 = new ConnectModel(); */

//$testOutput = $test->select("SELECT * FROM employees LIMIT 10");
/* $query = "SELECT * FROM employees WHERE emp_no = ?";
$testOutput = $test->select($query, [10001]);

pr($testOutput);

pr($testOutput[0]);

$testOutput2 = $test2->selectOne($query, [10001]);
pr($testOutput2); */





$insert = new ConnectModel();
$queryInsert = "INSERT INTO user_details (username, first_name, last_name, gender, password, status) VALUES(?,?,?,?,?,?)";

$params = ['Aladdin70', 'Aladdin', 'Sami', 'Male', '1234', 1];

$result = $insert->data($queryInsert, $params);

vd($result);
