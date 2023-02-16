<?php
/* to fix letters in name */
function fix_name($name)
{
    return ucwords(strtolower($name));
}