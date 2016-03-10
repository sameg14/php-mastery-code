<?php
require('Card.php');
require('Deck.php');
require('Player.php');
require('Game.php');

$players = array('John', 'Kaley', 'Delan', 'Sam');
$game = new Game($players, 5);
echo $game->play();