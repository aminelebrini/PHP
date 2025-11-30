<?php
    $date = "22-07-2004";

    echo preg_match_all("/\d{2}-\d{2}-\d{4}/", $date,$date2);

    print_r($date2);
?>