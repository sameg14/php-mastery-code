<?php

/**
 * Create a deck of cards
 * @return array
 */
function getDeck()
{
    $deck = [];

    $suites = array('D', 'H', 'S', 'C');

    // Ranks
    $ranks = array_merge(
        array('A'),
        range(2, 10),
        array('J', 'Q', 'K')
    );

    foreach ($suites as $suite) {

        foreach ($ranks as $rank) {

            $deck[] = $rank . $suite;
        }
    }

    return $deck;
}

$deck = getDeck();
echo '<pre>';
print_r($deck);