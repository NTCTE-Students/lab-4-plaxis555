<?php

function average($numbers) {
    $max = array_unique($numbers);

    return $max;
}

// Вызов функции
$numbers = [1, 1, 1, 2, 2 ,2, 2, 3, 4, 5];
$result = average($numbers);

print_r($numbers);
print("<br>");
print_r($result);

