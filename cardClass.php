<?php
/* creating a deck of cards class to be used in a blackJack game*/

class Deck{

  public $cards = array();
  public $player = [];

  //creates an instance of a deck of cards (works)
  public function __construct(){
    $values =array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
    $suits =array('Diamond','Club','Heart','Spade');
      foreach ($suits as $suit) {
         foreach($values as $value){
           $this->cards[] = "$value of $suit's";
           //$deck = $this->cards;
         }
      }
  }



  /*add more decks to increase number of total cards
  in my array (works)*/

  public function numberOfDecks($number){

    $cards = $this->cards;

    $this->number = $number;
      for($i = 0 ; $i < $number-1; $i++){
          $this->cards = array_merge($this->cards, $cards);
    }
    return $cards;
  }

  /*adding creating an array of 2 cards for the amount of players
  that are indicated in the parameters (works)*/

  public function deal($numberOfPlayers){

    $this->numberOfPlayers = $numberOfPlayers;
    $player = $this->player;
    $number = 2;

    for($i = 0; $i < $number; $i++){
  for($j = 0; $j < $numberOfPlayers; $j++){
    $this->player[$j][] = $this->cards[0];
    array_shift($this->cards);
  }
}
    for($k = 0; $k < $numberOfPlayers; $k++)
      return $player[$k];
  }
}



$deck = new Deck();//works as expected
$deck->numberOfDecks(3);//works as expected
$shuffled = shuffle($deck->cards);//works as expected
$deck->deal(4);
var_dump($deck);
