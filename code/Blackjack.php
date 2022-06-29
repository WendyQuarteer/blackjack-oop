<?php
declare(strict_types=1);

//Create a class called Blackjack in the file Blackjack.php
class Blackjack
{
    //Add 3 private properties
    private Player $player;
    private Dealer $dealer;//Player for now//Change the Blackjack class to create a new dealer object instead of a player object for the property of the dealer.
    private Deck $deck;

    /**
     * @param $player
     * @param $dealer
     * @param $deck
     */
    public function __construct()
    {
        $this->deck = new Deck();//getDeck (returns the deck object)
        $this->deck->shuffle();//Shuffle the cards with shuffle method on deck
        $this->player = new Player($this->deck);//getPlayer (returns the player object)//Instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->dealer = new Dealer($this->deck);//getDealer (returns the dealer object)//Instantiate the Player class twice, insert it into the player property and a dealer property.//change to dealer
    }

    /**
     * @return Player
     */
    public function getPlayer():object
    {
        return $this->player;
    }

    /**
     * @return Dealer
     */
    public function getDealer():object
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


  /*  public function getCard():array
    {
        return $this->card;
    }*/




}
