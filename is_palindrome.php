<?php
    $str = "amine";
    $length = strlen($str);
    $rev = null;
    for($x = 0; $x < $length; $x++)
    {
        $rev = $str[$length - 1 - $x];
        echo $rev;
    }
?>