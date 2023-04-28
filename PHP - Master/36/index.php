<?php

// mysqli 

// PDO

// phpinfo();
// dsn is data source name includes database server type , hostname , dbase, charset
$host = "localhost";
$db = "employees";
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$username = "root";
$password = "";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];

try {
    $connect = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$gender = 'M';
//$query = "SELECT * FROM employees WHERE gender = ? LIMIT 10";
$query = "SELECT * FROM employees LIMIT 10";

$stmt = $connect->prepare($query);
//$stmt->execute([$gender]);
$stmt->execute();

/* 

[
    [],
    [],
    [],
    .
    .

]

*/

$output = $stmt->fetchAll();
include_once('./arrayTools.php');

// pr($output);
?>
<table border="1">
    <thead style="background-color: grey;">
        <tr>
            <th>emp_no</th>
            <th>birth_date</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>hire_date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($output as $key => $value) : ?>
        <tr>
            <?php foreach ($value as $value2) : ?>
            <td><?= $value2; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>