<?php
    $str = "amine";
    $length = strlen($str);
    $rev = null;
    for($x = 0; $x < $length; $x++)
    {
        $rev = $str[$length - 1 - $x];
        echo $rev;
        if($rev === $str)
        {
            echo "EST PALINDROME";
        }else{
            echo "N'EST PAS UNE PALINDROME";
        }
    }
?>