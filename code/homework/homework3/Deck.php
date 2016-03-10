<?php

class Deck
{
    /**
     * These are the 52 cards in my deck
     * @var Card[]
     */
    protected $cards;

    public function __construct()
    {
        // Some logic to create the deck of cards
        $this->createDeck();

        // Shuffle the deck
        shuffle($this->cards);
    }

    /**
     * Get one card from the deck, throw an exception if there are no cards left
     * @throws Exception
     * @return Card
     */
    public function getCard()
    {
        // Make sure that I have cards and if I don't have any, throw an exception
        if (empty($this->cards)) {
            throw new Exception('No more cards to give!');
        }

        // This will give you one element off the top, and it removes the elements from the array
        return array_shift($this->cards);
    }

    /**
     * How many cards do I have left
     * @return int
     */
    public function getNumCards()
    {
        return count($this->cards);
    }

    /**
     * Create a deck of card objects and populate the local $cards property
     * @return void
     */
    protected function createDeck()
    {
        $suites = array('D', 'H', 'S', 'C');
        $ranks = array_merge(range(1, 10), array('J', 'Q', 'K'));

        foreach ($suites as $suite) {
            foreach ($ranks as $rank) {
                $this->cards[] = new Card($rank, $suite);
            }
        }
    }
}