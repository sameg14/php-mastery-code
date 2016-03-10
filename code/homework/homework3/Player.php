<?php

class Player
{
    /**
     * What is this player called?
     * @var string
     */
    protected $name;

    /**
     * This is the player's hand of cards
     * @var Card[]
     */
    protected $hand = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Give this player only a valid card object
     * @param \Card $card One shuffled card
     * @return void
     */
    public function giveCard(Card $card)
    {
        $this->hand[] = $card;
    }

    /**
     * Show the player's name and their hand
     * If the hand is empty, throw no errors, but indicate the same
     * @return string
     */
    public function showHand()
    {
        $html = '<h3>' . $this->name . "'s hand</h3>";

        if (empty($this->hand)) {
            $html .= 'Your hand is empty!';
        } else {

            foreach ($this->hand as $card) {
                $html .= $card->render();
            }
        }

        return $html;
    }

}