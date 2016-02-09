<?php

// By value
function changeName($name)
{
    return $name . ' Austin';
}

$name = 'Samir';
//echo 'Your changed name is: ' . changeName($name);

//--------------------------------------------------------------


function changeNameByRef(&$fame)
{
    $fame = 'This is a new name';
}

changeNameByRef($name);

echo 'NameIs: ' . $name . '<br/>';