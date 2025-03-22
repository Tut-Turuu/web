<?php
function increaseEnthusiasm($anyString): string {
    return $anyString . "!";
}

echo increaseEnthusiasm("les go"), "\n";

function repeatThreeTimes($anyString): string {
    return $anyString . $anyString . $anyString;
}

echo repeatThreeTimes("les go"), "\n";

echo increaseEnthusiasm(repeatThreeTimes("les go")), "\n";

function cut($anyString, $length = 10): string {
    return substr($anyString, 0, $length);
}

echo cut("0123456789abcdef"), "\n";

function print_arr_recursively($arr, $index = 0) {
    if ($index < count($arr)) { 
        echo $arr[$index], " "; 
        print_arr_recursively($arr, $index + 1);
    }
}

$arr = [3, 2, 1, 9];
print_arr_recursively($arr);

echo "\n";

function sum_digits($num) {
    if ($num <= 9) {
        return $num;
    }

    return sum_digits(array_sum(str_split($num)));
}

echo sum_digits(1); 
echo "\n";
echo sum_digits(1111); 
echo "\n";

?>
