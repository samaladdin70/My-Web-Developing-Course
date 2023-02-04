<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="task" id="">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    include_once('./arrayTools.php');
    $jsonGet = file_get_contents('./api.json');
    $myArray = json_decode($jsonGet);

    //pr($myArray);
    if (isset($_GET['submit'])) {
        $myArray[] = ["task" => $_GET['task']];
        $jsonOut = json_encode($myArray);
        file_put_contents('./api.json', $jsonOut);
        $jsonGet = file_get_contents('./api.json');
        $myArray = json_decode($jsonGet);
    }

    pr($myArray);
    ?>
</body>

</html>