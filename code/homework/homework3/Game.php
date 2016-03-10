<?php

class Game
{
    /**
     * Player names
     * @var array
     */
    protected $players;

    /**
     * How many cards does each player get?
     * @var int
     */
    protected $numCards;

    public function __construct($players, $numCards = 3)
    {
        $this->players = $players;
        $this->numCards = $numCards;
    }

    /**
     * Going to display everyone's hand
     * @throws Exception
     * @return string
     */
    public function play()
    {
        $html = '';

        if (empty($this->players)) {
            throw new Exception('No players!');
        }

        $deck = new Deck();

        foreach ($this->players as $playerName) {

            $player = new Player($playerName);

            for ($i = 0; $i < $this->numCards; $i++) {
                $player->giveCard($deck->getCard());
            }

            $html .= $player->showHand();
            $html .= '<hr/>';
        }

        return $html;
    }
}