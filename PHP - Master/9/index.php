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
            <!-- end form -->

            <div class="w-100">
                <?php
                if (isset($_GET['submit'])) :
                    include('./mytools.php');
                ?>

                <!-- Statistics -->
                <?php if ($_GET['article'] != '' && $_GET['search'] != '' && $_GET['replace'] == '') : ?>
                <div class="d-flex justify-content-between mt-4">
                    <div><?php echo "Repeat: " . repeat_count($_GET['article'], $_GET['search']) ?></div>
                    <div>
                        <?php echo "Exists: " . substr(percentage($_GET['article'], $_GET['search']) * word_count($_GET['search']), 0, 5) . " %" ?>
                    </div>
                    <div><?php echo "total words: " . word_count($_GET['article']) ?></div>
                </div>
                <div class="w-100 mt-1">

                    <!-- progress bar -->
                    <div class="progress" role="progressbar" style="height:5px;" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100">
                        <div class="progress-bar bg-danger"
                            style="width: <?php echo percentage($_GET['article'], $_GET['search']); ?>%"></div>
                    </div>
                </div>

                <!-- output -->
                <div class="mt-3 w-100 bg-light p-2" style="height: 210px; overflow:auto;">
                    <?php echo replace($_GET['article'], $_GET['search'], "<mark>$_GET[search]</mark>"); ?>
                </div>


                <?php elseif ($_GET['article'] != '' && $_GET['search'] != '' && $_GET['replace'] != '') : ?>
                <div class="d-flex justify-content-between mt-4">
                    <div><?php echo "Repeat: " . repeat_count($_GET['article'], $_GET['search']) ?></div>
                    <div>
                        <?php echo "Exists: " . substr(percentage(replace($_GET['article'], $_GET['search'], $_GET['replace']), $_GET['replace']) * word_count($_GET['replace']), 0, 5) . " %" ?>
                    </div>
                    <div>
                        <?php echo "total words: " . word_count(replace($_GET['article'], $_GET['search'], $_GET['replace'])) ?>
                    </div>
                </div>
                <div class="w-100 mt-1">

                    <!-- progress bar -->
                    <div class="progress" role="progressbar" style="height:5px;" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100">
                        <div class="progress-bar bg-danger"
                            style="width: <?php echo percentage($_GET['article'], $_GET['search']); ?>%"></div>
                    </div>
                </div>

                <!-- output -->
                <div class="mt-3 w-100 bg-light p-2" style="height: 210px; overflow:auto;">
                    <?php echo replace($_GET['article'], $_GET['search'], "<mark>$_GET[replace]</mark>"); ?>
                </div>




                <?php
                    endif;
                endif; ?>
            </div>

        </div>

    </div>

</body>

</html>