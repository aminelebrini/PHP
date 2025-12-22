<?php
    $email1 = "amine@gmail.com";
    $email2 = "aminegmail.com";

    echo preg_match("/.com+$/",$email1,$em);
    echo "\n";
    echo preg_match("/^[\w\.]+@\w+\.\w+$/",$email2,$em1);
?>