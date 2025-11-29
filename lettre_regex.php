<?php
    $str1 = "Hello";
    $str2 = "hello1234";

    echo preg_match("/^[a-zA-Z]+$/", $str1, $x);
    echo "\n";
    echo preg_match("/^[a-zA-Z]+$/", $str2, $x);
?>