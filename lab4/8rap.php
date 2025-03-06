<?php


function generatePassword($numbers) {
    $max = md5(uniqid(rand(),true));

    return $max;
}

// Вызов функции
$id = 0;
$result = generatePassword($numbers);

print(mb_strimwidth($result, 0, 10, "..."));



