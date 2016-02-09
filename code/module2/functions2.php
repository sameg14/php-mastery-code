<?php

// This is known as the function "declaration"
/**
 * Add two numbers together
 * @param int $num1 First number
 * @param int $num2 Second number
 * @return int This returns the sum of two numbers
 */
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}


// Function usage
$sum = addNumbers(21, 43);
echo 'sum = ' . $sum;