<?php
function func($a, $b): bool {
    return ($a + $b) > 10;
}

echo func(5, 6), "\n";

function equal($a, $b): bool {
    return $a === $b;
}

echo equal(4, 4), "\n";

$test = 0;
echo ($test == 0) ? 'верно' : '', "\n";

$age = 88;
if ($age < 10 || $age > 99) {
    echo "number less than 10 or greater than 99\n";
} else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo "sum is one digit\n";
    } else {
        echo "sum is two digits\n";
    }
}

$arr = [1, 2, 3];
if (count($arr) == 3) {
    echo "array elements sum: " . array_sum($arr) . "\n";
}
?>
