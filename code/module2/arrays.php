<?php

// Flat array
$flat = ['red', 'blue', 'orange'];
$flat = array('red', 'blue', 'orange');
echo '<pre>';
print_r($flat);
echo '</pre>';

// Associative array
$user = array(
    'name' => 'Samir',
    'location' => 'Austin'
);
echo '<pre>';
print_r($user);
echo '</pre>';

// stdClass object: kind of like an array
// This is also known as a POD: Plain Ol Data
$data = new stdClass();
$data->position = 'north';
$data->location = 'USA';
$data->population = 123;

echo '<pre>';
print_r($data);
echo '</pre>';