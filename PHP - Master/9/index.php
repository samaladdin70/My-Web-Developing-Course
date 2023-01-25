<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- Container -->
    <div class="coontainer-fluid w-100 p-4" style="height: 100vh;">
        <div class="d-flex flex-column align-items-center mx-auto shadow p-4 rounded" style="max-width: 850px;">

            <!-- The form -->
            <?php include('./view/formhandle.php'); ?>
            <!-- end form -->

            <div class="w-100">
                <?php
                if (isset($_GET['submit'])) :
                    include_once('./mytools.php');
                ?>

                <!-- Statistics -->
                <?php if ($_GET['article'] != '' && $_GET['search'] != '' && $_GET['replace'] == '') : ?>
                <?php include('./view/searchhandle.php'); ?>

                <?php elseif ($_GET['article'] != '' && $_GET['search'] != '' && $_GET['replace'] != '') : ?>
                <?php include('./view/replacehandle.php'); ?>
                <?php
                    endif;
                endif; ?>
            </div>
        </div>
    </div>

</body>

</html>