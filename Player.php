<?php 

class Player {
  public $name;
  public $hand = [];
  public $wonCards = [];

  public function __construct($name, $hand) {
      $this->name = $name;
      $this->hand = $hand;
  }

  public function drawCard() {
      return array_pop($this->hand);
  }

  public function addCards($cards) {
      $this->wonCards = array_merge($this->wonCards, $cards);
  }

  public function hasCards() {
      return count($this->hand) > 0;
  }

  public function totalCards() {
      return count($this->hand) + count($this->wonCards);
  }

  public function shuffleWonCards() {
      $this->hand = array_merge($this->hand, $this->wonCards);
      $this->wonCards = [];
      shuffle($this->hand); // シャッフル
  }
}

?>