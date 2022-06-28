<?php
declare(strict_types=1);

session_start();//Start the PHP session

require 'Blackjack.php';//Require all the files with the classes you already created. Ideally you want a seperate file for each class.
require 'Player.php';
require 'Deck.php';
require 'Suit.php';
require 'Card.php';
require 'view.php';
require 'Dealer.php';

public function button()
{
    if (isset($_POST['start'])) {
        //Create a new Blackjack object.
        $_SESSION['blackjack'] = new Blackjack();
    }

    if (isset($_POST['hit'])) {

    }

    if (isset($_POST['stand'])) {
        //$_SESSION['blackjack']->getDealer()->hit();
    }
    if (isset($_POST['surrender'])) {
        //$_SESSION['blackjack']->getPlayer()->surrender();
    }
}


