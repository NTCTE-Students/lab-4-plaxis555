<?php
function factorial($n) {

    if ($n < 0) {
        return "Факториал отрицательного числа не определён.";
    }

    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result *= $i; 
    }

    return $result; 
}

$number = 5;
echo "Факториал числа {$number} равен " . factorial($number);
?>