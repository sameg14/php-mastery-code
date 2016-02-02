<?php

$jsonString = '{"name" : "samir", "location" : "austin"}';
$data = json_decode($jsonString);

$dataArray = (array) $data;

echo '<pre>';
print_r($dataArray);
die('kat');


//echo 'Your name is: ' . $data->name;

echo '<hr/>';

$personArray = array('name' => 'Samir');
echo 'Your array name is: ' . $personArray['name'];

echo '<pre>';
print_r($data);
echo '</pre>';

