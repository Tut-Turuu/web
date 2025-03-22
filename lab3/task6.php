<?php

$a = 10;
$b = 3;
echo $a % $b, "\n";


if ($a % $b == 0) {
    echo "divides ", $a / $b, "\n";
} else {
    echo "divides with remainder ", $a % $b, "\n";
}


$st = pow(2, 10);
$sqrt_n = sqrt(245);

$arr = array(4, 2, 5, 19, 13, 0, 10);
$sq_sum = 0;
foreach ($arr as $i) {
    $sq_sum += $i**2;
}

echo "2 pow 10: ", $st,
"\nsqrt of 245: ", $sqrt_n,
"\nsqrt of array elemts squares: ", sqrt($sq_sum), "\n";


$num1 = sqrt(379);
$sqrt1 = round($num1);
$sqrt2 = round($num1, 1);
$sqrt3 = round($num1, 2);

$num2 = sqrt(587);
$array = ['floor' => floor($num2), 'ceil' => ceil($num2)];

echo "round of sqrt(379):",
"\n$sqrt1", "\n$sqrt2", "\n$sqrt3";
echo "\nfloor and ceil of sqrt(587): ";
var_dump($array);


$array = [4, -2, 5, 19, -130, 0, 10];
echo "min: ", min($array),
"\nmax: ", max($array), "\n";


echo "random: ", rand(1, 100), "\n";

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(1, 100);
}
var_dump($array);


$a = 42;
$b = 87;
echo "|a - b| = ", abs($a - $b), "\n";

$array = [1, 2, -1, -2, 3, -3];
$new_arr = array_map('abs', $array);

var_dump($new_arr);


$a = 32;

$divisors_arr = [];
for ($d = 1; $d <= $a/2; $d++) {
    if ($a % $d == 0) {
        $divisors_arr[] = $d;
    }
}

$divisors_arr[] = 32;
echo "divisors of {$a}:\n";
var_dump($divisors_arr);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $value) {
    if ($sum <= 10) {
        $sum += $value;
        $count++;
    }
}
echo "need to sum {$count} first elemnts to get sum more than 10\n";

?>
