//playerの手札を決める処理
<?php


class Player { 
  public $suits; 
  public $numbers; 
  public $player;
  public function draw($player) {
      // マークの配列
    $suits = ['ダイヤ', 'ハート', 'スペード', 'クローバー'];
    //数字の配列
    $numbers = ["A", "K", "Q", "J","10","9","8","7","6","5","4","3","2"];
    $suit = $suits[array_rand($suits)];
    $number = $numbers[array_rand($numbers)];
    
    $this->player = $player;
  
      echo $player."の".$suit."の".$number . "\n";     
    }
    
}

?>