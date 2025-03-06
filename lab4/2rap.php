<?php
function isPalindrome($stroka) {
    if ($stroka === strrev($stroka)) {
        return "Палидром";

    } else {
        return "Не палиндром"; 
    }

}


$stroka = "dovod";

$result_stroka = isPalindrome($stroka); 


print($result_stroka . " " . $stroka);
?>