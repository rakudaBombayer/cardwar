<?php
class Player { 
  public string $name;
  public string $suit;
  public int $number;

  public function __construct(string $name, string $suit, int $number) { $this->name = $name;
  $this->suit = $suit;
  $this->number = $number;
  }
  
  }

  class Game {
  public function battle(Player $player) {
  echo $player->name . "のカードは" . $player->suit . "の" . $player->number . "です。";
    }
  }

  // プレイヤーの作成
  $player1 = new Player("Alice", "ハート", 13);

  // ゲームの開始
  $game = new Game();
  $game->battle($player1);
  ?>