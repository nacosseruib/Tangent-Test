/*
3. Write a short PHP function that reverses a string

Answer
*/

<?php

function reverseString($inputString) {
    $stringLength = strlen($inputString);
    $reversedString = '';

    for ($i = $stringLength - 1; $i >= 0; $i--) {
        $reversedString .= $inputString[$i];
    }

    return $reversedString;
}


// Example usage
$result = reverseString("Samson Ajakaye");
print_r($result);

// Out put
//eyakajA nosmaS
?>