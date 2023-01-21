<?php
/* to fix letters in name */
function fix_name($name)
{
    return ucwords(strtolower($name));
}




function word_count($article)
{
    return str_word_count($article);
}



function repeat_count(string $article, string $search)
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

            $counter = $position + 1;
        }
    }
    if (isset($pos)) {
        $count = count($pos);
        return $count;
    } else {
        return 0;
    }
}



function replace(string $article, string $search)
{
    return str_ireplace($search, "<mark>$search</mark>", $article);
}



function percentage(string $article, string $search)
{
    $percentage = repeat_count($article, $search) / word_count($article) * 100;
    return $percentage;
}