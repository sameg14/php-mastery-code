<?php

/**
 *Make a bunch of cookies!
 * @param int $num How many cookies we need?
 * @param string $name What is the name on the cookie box?
 * @param bool|true $shouldBake Should these be baked?
 * @return array
 *
 * array(
 *  'kat1baked',
 *  'kat2baked',
 *  'kat3baked'
 * )
 *
 */
function makeCookies($num, $name, $shouldBake = true)
{
    $cookies = [];
    $cookies = array();

    // This is a "ternary" operator
    $bakedString = $shouldBake == true ? 'baked' : 'not baked';

    // This is the same as line 23
    if ($shouldBake == true) {
        $bakedString = 'baked';
    } else {
        $bakedString = 'not baked';
    }

    for ($i = 1; $i <= $num; $i++) {
        $cookies[] = $name . ' ' . $i . ' ' . $bakedString;
    }

    return $cookies;
}

// Function usage
$result = makeCookies(5, 'kat', false);

echo '<pre>';
print_r($result);
echo '</pre>';