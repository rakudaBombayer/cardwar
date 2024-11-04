<?php

class Deck {
  private $cards = [];

  public function __construct() {
      $suits = ['ハート', 'ダイヤ', 'クラブ', 'スペード'];
      $ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
      foreach ($suits as $suit) {
          foreach ($ranks as $rank) {
              $this->cards[] = new Card($suit, $rank);
          }
      }
      shuffle($this->cards); // シャッフル
  }

  public function deal() {
      return array_splice($this->cards, 0, count($this->cards) / 2);
  }
}

?>