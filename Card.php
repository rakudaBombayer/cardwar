<?php


class Card {
  public $suit; 
  public $rank;
  
  public function __construct($suit, $rank) {
    $this->suit = $suit;
    $this->rank = $rank;
  }

  public function __toString() {
    return "{$this->suit}の{$this->rank}";
  }

  }

?>