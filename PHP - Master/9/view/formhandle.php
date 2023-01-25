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