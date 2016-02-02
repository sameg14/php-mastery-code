<?php
$myInteger = 35;
$myFloat = 12.56;
$myString = "Herrrrrrro";
$myArray = array('boots', 'and', 'kats');
$myBool = false;

echo "<pre>";
print_r($myArray);
echo "</pre>";

// Associative array
$person = array(
    'name' => 'Ryan Murphy',
    'location' => 'Austin',
    'vehicle' => 'truck'
);

echo "<pre>";
print_r($person);
echo "</pre>";

// Multidimensional arrays
$person2 = array(
    'name' => 'Nicole',
    'location' => "San Antonio",
    'vehicle' => 'Supra'
);

$people = $person . $person2;
echo 'People are::' . '<br/>';
echo '<pre>';
print_r($people);
echo '</pre>';

$peopleArray = array();
$peopleArray[] = $person;
$peopleArray[] = $person2;
$peopleArray[] = $person2;
$peopleArray[] = $person2;
$peopleArray[] = $person2;
$peopleArray[] = $person2;

echo '<pre>';
print_r($peopleArray);
echo '</pre>';

$assoc = [
    'person1' => $person,
    'person2' => $person2
];

echo '<pre>';
print_r($assoc);
echo '</pre>';