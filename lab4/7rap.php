<?php
function customStrLen($str) {
    $length = 0; 

    while (isset($str[$length])) {
        $length++; 
    }

    return $length; 
}

$string = "Hello, world!";
$result = customStrLen($string);

echo "Длина строки: {$result}"; 