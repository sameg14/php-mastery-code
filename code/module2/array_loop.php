<?php

$colors = array('red', 'blue', 'green', 'brown');

echo '<pre>';
print_r($colors);

foreach ($colors as $key => $color) {
    echo 'Color' . $key . ': ' . $color . '<br/>';
}
echo '<hr/>';


$user = array(
    'name' => 'Samir',
    'location' => 'Austin',
    'hobbies' => "PHP"
);

foreach ($user as $k => $v) {
    echo 'Key: ' . $k . "\t" . ' Value:' . $v . "<br/>";
}

$medicalCodes = array(
    369 => 'Blindness and low vision',
    372 => 'Disorders of conjunctiva',
    377 => 'Disorders of optic nerve and visual pathways',
    378 => 'Strabismus and other disorders of binocular eye movements',
    380 => 'Disorders of external ear',
    383 => 'Mastoiditis and related conditions'
);


echo $medicalCodes[383];