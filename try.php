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
  public function battle(Player $player1, Player $player2) {
  echo $player1->name . "のカードは" . $player1->suit . "の" . $player1->number . "です。"."\n";
  echo $player2->name . "のカードは" . $player2->suit . "の" . $player2->number . "です。"."\n";

    
  if ($player1->number > $player2->number) {
    echo $player1->name . "の勝ちです!\n";
  } else if ($player1->number < $player2->number){
  echo $player2->name . "の勝ちです！\n";
    } else {
      echo "引き分けです!\n";
    }
  }
}
  // プレイヤーの作成
  $player1 = new Player("プレイヤー1", "ハート", 13);
  $player2 = new Player("プレイヤー2", "スペード", 13);

  // ゲームの開始
  echo "戦争を開始します。"."\n";
  echo "カードが配られました。"."\n";
  $game = new Game();
  $game->battle($player1, $player2);
 
  ?>