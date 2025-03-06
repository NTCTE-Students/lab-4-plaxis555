<?php


function str($numbers) {
    $max = ucfirst($numbers);

    return $max;
}

// Вызов функции
$numbers = 'zzzz';
$result = str($numbers);

print($result);

