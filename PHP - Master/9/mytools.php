<?php
/* to fix letters in name */
function fix_name($name)
{
    return ucwords(strtolower($name));
}

function article_analysis(string $article, string $search)
{
    $article = trim($article);
    $search = trim($search);
    $counter = 0;
    while ($counter <= strlen($article)) {

        $position = stripos($article, $search, $counter);

        if ($position === false) {
            break;
        } else {
            $pos[] = $position;
            // echo $position . "<br>";
            $counter = $position + 1;
        }
    }
    return count($pos);
}