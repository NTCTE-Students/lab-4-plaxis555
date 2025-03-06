<?php


function convert($celsius)
{
    return ($celsius * 9/5) + 32;
}
// Вызов функции
$numbers = 25;
$result = convert($numbers);

print($numbers . "C" ."  ". $result . "F");