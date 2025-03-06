<?php
function isPrime($number) {

    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }

    return true; 
}

$number = 29;
if (isPrime($number)) {
    echo "{$number} — простое число.";
} else {
    echo "{$number} — не простое число.";
}
?>