<?php
# Вариант №8 

$str = "123vb123b1m56";

$regexp = "/[0-9]+/"; 

$result = preg_replace_callback(
    $regexp,
    function ($matches) {
        return $matches[0]+5;
    },
    $str
);

echo $result;
?>