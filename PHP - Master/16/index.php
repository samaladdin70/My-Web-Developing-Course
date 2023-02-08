<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="main">
            <a href="./reset.php">
                <div class="reset">
                    RESET
                </div>
            </a>
            <form action="">
                <div>
                    <input type="text" name="task" id="" required placeholder="For examp: Task1 . . .">
                    <button type="submit" name="submit">
                        Enter
                    </button>
                </div>
            </form>
            <?php
            include_once('./arrayTools.php');
            $jsonGet = file_get_contents('./api.json');
            $myArray = json_decode($jsonGet);

            if (isset($_GET['submit'])) {
                $myArray[] = ["task" => $_GET["task"]];
                $jsonOut = json_encode($myArray);
                file_put_contents('./api.json', $jsonOut);
                header('Location: index.php');
            }
            // pr($myArray);
            ?>
            <?php foreach (array_reverse($myArray) as $key => $value) : ?>
            <div class="output">
                <p><?php echo $value->task; ?></p>
                <a href="./delete.php?key=<?php echo count($myArray) - $key - 1 ?>">
                    <button class="del">
                        Delete
                    </button>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>