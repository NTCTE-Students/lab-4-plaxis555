<?php


function sortArray($numbers) {
    asort($numbers);
    return ($numbers);
}

$numbers = [2, 3, 9, 1, 5];
$result = sortArray($numbers);

print_r($result);

