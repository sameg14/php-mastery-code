<?php

/** @var array $states Some American states */
$states = array(
    'AK' => "Alaska",
    'AZ' => "Arizona",
    'CA' => "California",
    'CO' => "Colorado",
    'CT' => "Connecticut",
    'DC' => "District Of Columbia",
    'HI' => "Hawaii",
    'ME' => "Maine",
    'MD' => "Maryland",
    'MA' => "Massachusetts",
    'MI' => "Michigan",
    'MN' => "Minnesota",
    'MT' => "Montana",
    'NV' => "Nevada",
    'NH' => "New Hampshire",
    'NJ' => "New Jersey",
    'NM' => "New Mexico",
    'NY' => "New York",
    'OR' => "Oregon",
    'RI' => "Rhode Island",
    'VT' => "Vermont",
    'WA' => "Washington"
);


// Add TX = Texas to the array
$states['TX'] = 'Texas';

// Change the name of California to "cali"
$states['CA'] = 'Cali';

// Count the number of states we have
echo 'There are ' . sizeof($states);

// Remove Hawaii from the array
unset($states['HI']);