<?php

$age = 30;

switch ($age) {

    case 12:
        echo 'I cannot drink';
        break;

    case 18:
        echo 'I can smoke';
        break;

    case 30:
        echo 'I can drink';
        break;

    default:
        echo 'You should not be drinking';
}

die('say something here' . $age);