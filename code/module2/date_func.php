<?php

// This is how you get your PHP config
//phpinfo();

ini_set('date.timezone', 'America/Chicago');

echo date('m/d/Y h:i:s');
echo '<hr/>';

echo 'Current UNIX timestamp: ' . strtotime('now');
echo '<hr/>';

$timestamp = 1423983636;
echo 'The fiddled date is: ' . date('m/d/Y h:i:s', $timestamp);
echo '<hr/>';