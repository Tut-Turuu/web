<?php

$array = [1, 2, 3, 4, 5];
$mean = array_sum($array) / count($array);
echo "arithmetic mean: $mean\n";

$sum = (1+100)*100/2;
echo "sum from 1 to 100: $sum\n";

$arr = [1, 4, 9, 16, 25];
$square_roots = array_map('sqrt', $arr);
print_r($square_roots);

$letters = range('a', 'z');
$numbers = range(1, 26);
$arr = array_combine($letters, $numbers);
print_r($arr);

$numbers = '1234567890';
$pairs = str_split($numbers, 2);
$sum_of_Pairs = array_sum($pairs);
echo "sum of pairs: $sum_of_Pairs\n";
