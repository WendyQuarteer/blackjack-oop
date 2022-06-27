<?php
declare(strict_types=1);

//Create a class called Blackjack in the file Blackjack.php
class Blackjack
{
    //Add 3 private properties
    private Player $player;
    private Player $dealer;//Player for now
    private Deck $deck;

    /**
     * @param $player
     * @param $dealer
     * @param $deck
     */
    public function __construct(Player $player, Player $dealer, Deck $deck)
    {
        $this->player = $player;
        $this->dealer = $dealer;
        $this->deck = $deck;
        $this->deck->shuffle();//Shuffle the cards with shuffle method on deck
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @return Player
     */
    public function getDealer(): Player
    {
        return $this->dealer;
    }

    /**
     * @return Deck
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }




}
