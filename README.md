# blackjack-oop
##Creating the base classes

### - [x] Create a class called Player in the file Player.php.
  - [x] Add 2 private properties:
    - [x] cards (array)
    - [x] lost (bool, default = false)
  - [] Add a couple of empty public methods to this class:
    - [x] hit
    - [x] surrender
    - [x] getScore
    - [x] hasLost

### - [x] Create a class called Blackjack in the file Blackjack.php
  - [] Add 3 private properties:
    - [x] player (Player)
    - [x] dealer (Player for now)
    - [x] deck (Deck)
  - [x] Add the following public methods:
    - [x] getPlayer (returns the player object)
    - [x] getDealer (returns the dealer object)
    - [x] getDeck (returns the deck object)
  - [x] In the constructor do the following:
    - [x] Instantiate the Player class twice, insert it into the player property and a dealer property.
    - [x] Create a new deck object (code has already been written for you!)
    - [x] Shuffle the cards with shuffle method on deck.
  - [x] In the constructor of the Player class; Make it expect the Deck object as a parameter.
    - [x] Pass this Deck from the Blackjack constructor.
    - [x] Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.
  - [x] Go back to the Player class and add the following logic in your empty methods: getScore loops over all the cards and return the total value of that player.
    - [x] hasLost will return the bool of the lost property.
    - [x] hit should add a card to the player. If this brings him above 21, set lost property to true. To count his score use the method getScore you wrote earlier. This method should expect the $deck variable as an argument from outside, to draw the card.
      - [] (optional) For bonus points make the number 21 a class constant: this is a magical value we want to avoid.
    - [x] surrender should make you surrender the game. (Dealer wins.) This sets the property lost in the player instance to true.
    - [x] stand does not have a method in the player class but will instead call hit on the dealer instance. (you have to do nothing here)
## - [x] Creating the index.php file.  
- [x] Require all the files with the classes you already created. Ideally you want a seperate file for each class.
- [x] Start the PHP session
- [] If the session does not have a Blackjack variable yet:
  - [x] Create a new Blackjack object.
  - [] Put the Blackjack object in the session
- [] Use buttons or links to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)
