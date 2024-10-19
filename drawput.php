<?php


class Card { 
  public $suits; 
  public $numbers; 
  public function draw() {
  
    
    // マークの配列
    $suits = ['ダイヤ', 'ハート', 'スペード', 'クローバー'];
    //数字の配列
    $numbers = ["A", "K", "Q", "J","10","9","8","7","6","5","4","3","2"];
    
    $number = $numbers[array_rand($numbers)];
    $suit = $suits[array_rand($suits)];
    echo $suit."の".$number;
  }
}

// クラスのインスタンスを作成
$player = new Card();

// インスタンスを通して関数呼び出し
$player->draw();
?>