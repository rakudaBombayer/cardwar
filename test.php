<?php
class Player { public string $name; public Card $card; public function __construct(string $name) { $this->name = $name;
  }

  public function drawCard(Deck $deck): void {
  $this->card = $deck->drawCard();
  }
  }

  class Deck {
  private array $cards = [];

  public function __construct() {
  $suits = ['ハート', 'ダイヤ', 'クラブ', 'スペード'];
  foreach ($suits as $suit) {
  for ($number = 1; $number <= 13; $number++) { $this->cards[] = new Card($suit, $number);
    }
    }
    $this->shuffle();
    }

    public function drawCard(): Card {
    return array_pop($this->cards);
    }

    public function shuffle(): void {
    shuffle($this->cards);
    }
    }

    class Card {
    public string $suit;
    public int $number;

    public function __construct(string $suit, int $number) {
    $this->suit = $suit;
    $this->number = $number;
    }
    }

    class Game {
    public function battle(Player $player1, Player $player2): void {
    echo $player1->name . "のカードは" . $player1->card->suit . "の" . $player1->card->number . "です。\n";
    echo $player2->name . "のカードは" . $player2->card->suit . "の" . $player2->card->number . "です。\n";

    if ($player1->card->number > $player2->card->number) {
    echo $player1->name . "の勝ちです!\n";
    } elseif ($player1->card->number < $player2->card->number) {
      echo $player2->name . "の勝ちです!\n";
      } else {
        echo "引き分けです！\n";
        // 引き分けの場合、新たなカードを引いて再戦
        $player1->drawCard($deck);
        $player2->drawCard($deck);
        $this->battle($player1, $player2);
      }
      }
      }

     // デッキの作成
$deck = new Deck();

// プレイヤーの作成とカードの配布
$player1 = new Player("プレイヤー1");
$player2 = new Player("プレイヤー2");

// カードを配る
$player1->drawCard($deck);
$player2->drawCard($deck);

// ゲームの開始
$game = new Game();
$game->battle($player1, $player2);


      ?>