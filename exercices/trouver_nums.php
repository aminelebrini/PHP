<?php
    $ch = "A2D2S898X";

    preg_match_all("/[0-9]/", $ch, $matches);

    print_r($matches);
?>