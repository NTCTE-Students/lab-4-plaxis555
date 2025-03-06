<?php
function countWords($text) {

    return str_word_count($text);
}

$text = "Hello fri3nd, you're welcome!"; 
$result = countWords($text);
print("Количество слов: {$result}");
?>