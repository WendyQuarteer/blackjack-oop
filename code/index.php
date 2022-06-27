<?php
declare(strict_types=1);

session_start();//Start the PHP session

require 'Blackjack.php';//Require all the files with the classes you already created. Ideally you want a seperate file for each class.
require 'Player.php';
require 'Deck.php';
require 'Suit.php';
require 'Card.php';
require 'view.php';

$blackjack = new Blackjack();

if(isset($_POST['start'])) {

}




