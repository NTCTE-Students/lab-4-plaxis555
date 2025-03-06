<?php


function average($numbers) {
    $max = max($numbers);

    return $max;
}

// Вызов функции
$numbers = [1, 2, 3, 4, 5];
$result = average($numbers);

print("Максимальное число: {$result}");

