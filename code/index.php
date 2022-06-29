<?php
declare(strict_types=1);

session_start();//Start the PHP session
require 'Blackjack.php';//Require all the files with the classes you already created. Ideally you want a seperate file for each class.
require 'Player.php';
require 'Deck.php';
require 'Suit.php';
require 'Card.php';

/*foreach($deck->getCards() AS $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}*/


if (!isset($_SESSION['blackjack'])) {//Check if the session does not have a Blackjack variable yet:
    $serializedGame = serialize(new Blackjack());//Create a new Blackjack object and serialize it.
    $_SESSION['blackjack'] = $serializedGame;//Store the object inside the session.
}

$unserializedGame = unserialize($_SESSION['blackjack']);//get info out of the storage.

if (isset($_POST['start'])) {
    $newGame = $_SESSION['blackjack'];//Create a new Blackjack object.
    echo "you start with: " . $unserializedGame->getPlayer()->getScore() . "<br>" . "dealer starts with: " . $unserializedGame->getDealer()->getScore();
} elseif (isset($_POST['hit'])) {
    $unserializedGame->getPlayer()->hit($unserializedGame->getDeck());//call hit on player and get the score. //You will need to pass a Deck variable to this function, you can use the Blackjack::getDeck() method for this.
    $_SESSION['blackjack'] = serialize($unserializedGame);
    echo "you now have: " . $unserializedGame->getPlayer()->getScore() . "<br>" . "dealer now has: " . $unserializedGame->getDealer()->getScore();
    /*foreach ($unserialize->getPlayer()->getCards() as $card) {
         echo $card->getUnicodeCharacter(true);
         echo '<br>';
     }*/
} elseif (isset($_POST['stand'])) {
    $_SESSION['blackjack'] = serialize($unserializedGame);
    $unserializedGame->getDealer()->hit($unserializedGame->getDeck());//call hit on dealer and get the score.
    $_SESSION['blackjack'] = serialize($unserializedGame);
    echo "you now have: " . $unserializedGame->getPlayer()->getScore() . "<br>" . "dealer now has: " . $unserializedGame->getDealer()->getScore();//When you hit the stand button call hit on dealer, then check the lost status of the dealer.
    $_SESSION['blackjack'] = serialize($unserializedGame);
    $unserializedGame->getDealer()->hasLost();

} elseif (isset($_POST['surrender'])) {
    $_SESSION['blackjack'] = serialize($unserializedGame);
    unserialize($_SESSION['blackjack'])->getPlayer()->surrender();
}

if ($unserializedGame->getPlayer()->hasLost()) {
    $serializedGame = serialize(new Blackjack());//Create a new Blackjack object and serialize it.
    $_SESSION['blackjack'] = $serializedGame;//Store the object inside the session.
}
require 'view.php';




