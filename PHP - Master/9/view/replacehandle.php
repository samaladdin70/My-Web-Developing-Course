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