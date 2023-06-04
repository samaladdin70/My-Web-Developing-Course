<?php
include_once('./php/Tools.php');
session_start();

if (isset($_SESSION['name'])) :

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Session</title>
    </head>

    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Brand
                </a>
                <div class="d-flex">
                    <!-- <a href="./login.php" class="nav-link me-4">Login</a> -->
                    <a href="./php/logout.php" class="nav-link me-2">logout</a>
                </div>
            </div>
        </nav>

        <h1>Welcome Back <?= $_SESSION['name'] ?></h1>
    </body>

    </html>
<?php else :
    header('Location: ./login.php')
?>
<?php endif; ?>