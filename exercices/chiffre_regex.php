<?php

$str = "abc123";
$str1 = "abcdef";

echo preg_match("/[0-9]/",$str,$arr);
echo "\n";
echo preg_match("/[0-9]/",$str1,$arr);
?>