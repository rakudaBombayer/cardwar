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
    echo "戦争を終了します。\n";
  } else if ($player1->number < $player2->number){
  echo $player2->name . "の勝ちです！\n";
  echo "戦争を終了します。\n";
    } else {
      echo "引き分けです!\n";
      do {
        $newSuit1 = readline("プレイヤー1、新しいカードのマークを入力してください(ハート/ダイヤ/クラブ/スペード): ");
        $newNumber1 = readline("プレイヤー1、新しいカードの数字を入力してください(1-13): ");
        $newSuit2 = readline("プレイヤー2、新しいカードのマークを入力してください(ハート/ダイヤ/クラブ/スペード): ");
        $newNumber2 = readline("プレイヤー2、新しいカードの数字を入力してください(1-13): ");

        // 入力値の検証
        if (!is_numeric($newNumber1) || $newNumber1 < 1 || $newNumber1 > 13 ||
            !is_numeric($newNumber2) || $newNumber2 < 1 || $newNumber2 > 13 ||
            !in_array($newSuit1, ['ハート', 'ダイヤ', 'クラブ', 'スペード']) ||
            !in_array($newSuit2, ['ハート', 'ダイヤ', 'クラブ', 'スペード'])) {
          echo "カードの数字は1から13までの整数、マークはハート、ダイヤ、クラブ、スペードのいずれかを入力してください。\n";
        } else {
          $player1->number = $newNumber1;
          $player1->suit = $newSuit1;
          $player2->number = $newNumber2;
          $player2->suit = $newSuit2;
          break;
        }
      } while (true);
      // 再度バトル
      $this->battle($player1, $player2);
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