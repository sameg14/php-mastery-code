<?php

// This is how you make global constants
// You can use this anywhere
define('PI', 3.16754);

// Global scope
$name = 'Samir';


// Function scope
function sayHello()
{
    // This will not work
    echo 'your name is ' . $name;

    // This will work
    echo 'the value of pi is' . PI;
}


// Using my function
sayHello();