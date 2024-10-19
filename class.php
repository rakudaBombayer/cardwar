<?php


class War { 
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


// インスタンスの作成
$toranp = new War();


// // プロパティへの値の代入
// $toranp->number = "1";
// $toranp->suits = 20;

// メソッドの実行
$toranp->battle();
  ?>