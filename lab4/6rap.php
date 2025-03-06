<?php


function average($numbers) {
    $max = array_sum($numbers);

    return $max;
}

// Вызов функции
$numbers = [1, 2, 3, 4, 5];
$result = average($numbers);

print($result);

