<?php
function formatDate($inputDate) {

    $date = DateTime::createFromFormat('Y-m-d', $inputDate);

    if ($date === false) {
        return "Неверный формат даты. Ожидается 'YYYY-MM-DD'.";
    }

    return $date->format('d/m/Y');
}

$inputDate = "2023-10-05";
$formattedDate = formatDate($inputDate);

echo "Отформатированная дата: " . $formattedDate;
?>