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
    <div class="coontainer-fluid w-100 p-5" style="height: 100vh;">
        <div class="d-flex flex-column align-items-center mx-auto shadow p-4 rounded" style="max-width: 850px;">
            <form action="" method="get" class=" w-100">
                <div class="row">
                    <div class="col">
                        <input type="search" name="search" class="form-control" placeholder="Search . . ." value="
<?php
if (isset($_GET['search'])) :
    echo $_GET['search'];
endif;
?>">
                    </div>
                    <div class="col">
                        <input type="text" name="replace" class="form-control" placeholder="Replace . . ." value="
<?php
if (isset($_GET['replace'])) :
    echo $_GET['replace'];
endif;
?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <textarea name="article" id="" class="form-control" rows="5">
<?php
if (isset($_GET['article'])) :
    echo $_GET['article'];
endif;
?>
                        </textarea>
                    </div>

                </div>
                <button class="btn btn-dark mt-3 form-control" name="submit" type="submit">Search / Replace</button>
                <button class="btn btn-warning mt-3 form-control" name="reset" type="reset">Reset</button>
            </form>
            <div>
                <?php
                if (isset($_GET['submit'])) {
                    include('./mytools.php');
                    echo "Number of Matches: <span class='text-danger'>" . article_analysis($_GET['article'], $_GET['search']) . "</span> Times";
                }
                ?>
            </div>

            <div class="w-100 mt-4">
                <div class="progress" role="progressbar" style="height:5px;" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                </div>
            </div>
            <div class="mt-4 w-100 row">
                <div class="col" style="max-height: 300px; overflow:auto;">

                </div>

            </div>
        </div>

    </div>

</body>

</html>