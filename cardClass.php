<?php
/* creating a deck of cards class to be used in a blackJack game*/

class Deck{

  public  $cards = array();

  //creates an instance of a deck of cards (works)
  public function __construct(){
    $values =array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
    $suits =array('Diamond','Club','Heart','Spade');
      foreach ($suits as $suit) {
         foreach($values as $value){
           $this->cards[] = "$value of $suit's";
         }
      }
  }

  /*trying to add more decks to increase number of total cards
  in my array  (does not work)*/

  public function numberOfDecks($number){

    $cards = $this->cards;
    $this->number= $number;
    for($i = 0 ; $i < $number; $i++){
           array_push($cards,$this->cards[$i]);
    }
    return $cards;

  }
}



$deck = new Deck();//works as expected
$deck->numberOfDecks(3);//trouble
$shuffled = shuffle($deck->cards);//works as expected
var_dump($deck);
