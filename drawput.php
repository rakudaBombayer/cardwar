<?php


class Draw { 
  public $numbers; 
  public $suits; 
  public function battle() {
  

    //数字の配列
    $numbers = ["A", "K", "Q", "J","10","9","8","7","6","5","4","3","2"];
    // マークの配列
    $suits = ['ダイヤ', 'ハート', 'スペード', 'クローバー'];
    
    $number = $numbers[array_rand($numbers)];
    $suit = $suits[array_rand($suits)];
    echo $suit."の".$number;
  }
}

// クラスのインスタンスを作成
$draw = new Draw();

// インスタンスを通して関数呼び出し
$draw->battle();
?>