<?php
function calculateAverage($numbers) {

    if (empty($numbers)) {
        return 0; 
    }

    $sum = array_sum($numbers);

    $count = count($numbers);

    return $sum / $count;
}

$numbers = [10, 20, 30, 40, 50];
$average = calculateAverage($numbers);

echo "Среднее арифметическое: " . $average;
?>