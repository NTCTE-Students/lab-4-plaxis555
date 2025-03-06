<?php
function findSecondLargest($numbers) {

    if (count($numbers) < 2) {
        return "Массив должен содержать как минимум два числа.";
    }


    $first = $second = PHP_INT_MIN; 

    foreach ($numbers as $number) {

        if ($number > $first) {
            $second = $first; 
            $first = $number; 
        }

        elseif ($number > $second && $number != $first) {
            $second = $number;
        }
    }

    if ($second == PHP_INT_MIN) {
        return "Все числа в массиве одинаковые.";
    }

    return $second;
}

$numbers = [10, 20, 30, 40, 50];
$secondLargest = findSecondLargest($numbers);

echo "Второе по величине число: " . $secondLargest;

?>