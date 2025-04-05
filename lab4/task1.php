<?php
# Вариант №8 
$str = "hhfhhghhhhfhh hhh gghgghghghhh hhg";
$regexp = "/(?=(h.h))/";
$matches = [];

$count = preg_match_all($regexp, $str, $matches);
$matches = $matches[1];

echo "Найдено строк: $count \n";
var_dump($matches);
?>