<?php
declare(strict_types=1);

//Create a class called Player in the file Player.php
class Player
{
    //Add 2 private properties
    private array $cards;
    private bool $lost;
    const MAX = '21';


    /**
     * @param bool $lost
     */
    public function __construct(Deck $deck)//Make it expect the Deck object as a parameter
    {
        $this->cards[] = $deck->drawCard();//Draw 2 cards for the player. You have to use an existing method for this from the Deck class
        $this->cards[] = $deck->drawCard();//Draw 2 cards for the player. You have to use an existing method for this from the Deck class
        $this->lost = false;//default = false
    }

    public function hit(Deck $deck)//add a card to the player. This method should expect the $deck variable as an argument from outside, to draw the card.
    {
        $this->cards[] = $deck->drawCard();
        if ($this->getScore() > 21) {//If this brings him above 21, set lost property to true.
            echo $this->lost = true;
        }
    }

    public function surrender()//surrender should make you surrender the game. (Dealer wins.) This sets the property lost in the player instance to true.
    {
        echo $this->lost = true;
    }

    public function getScore()//Loops over all the cards and returns the total value of that player.
    {
        $score = 0;
        foreach ($this->cards as $card => $value) {
            $score += $value->getValue();
        }
        return $score;
    }

    public function hasLost()//Will return the bool of the lost property.
    {
        return $this->lost;
    }

}