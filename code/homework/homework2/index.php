<?php

/**
 * Create a deck
 * @return array
 */
function getDeck()
{
    $deck = [];
    $suits = array('S', 'H', 'D', 'C');
    $ranks = array_merge(range(1, 10), array('J', 'Q', 'K'));

    foreach ($suits as $suite) {
        foreach ($ranks as $rank) {
            $deck[] = $rank . ' ' . $suite;
        }
    }

    return $deck;
}

/**
 * Shuffle the deck
 * @param array $deck Deck of cards that need shuffling
 * @return void
 */
function shuffleDeck(&$deck)
{
    shuffle($deck);
}

/**
 * Deal a hand to each player
 * @param array $players Flat array of player names
 * @param int $numCards How many cards to deal to each player
 * @param array $deck A shuffled deck of cards
 * @return array
 */
function deal($players, $numCards, &$deck)
{
    $playerHands = [];

    foreach ($players as $player) {

        $playerHand = [];

        for ($i = 0; $i < $numCards; $i++) {

            $playerHand[] = array_shift($deck);
        }

        $playerHands[$player] = $playerHand;
    }

    return $playerHands;
}


// Usage
echo '<pre>';
$players = array('Jack', 'Jill', 'Justin');
$deck = getDeck();

shuffleDeck($deck);

$dealtPlayers = deal($players, $numCards = 3, $deck);
print_r($dealtPlayers);

echo '<hr/>';
print_r($deck);
