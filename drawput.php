//playerの手札を決める処理
<?php

class Player { 
  public $player;
  public $suits; 
  public $numbers; 
  public function card($player,$suits,$numbers) {
          
    $this->player = $player;
    $this->suits = $suits;
    $this->numbers = $numbers;

    echo $player . "のカードは" . $suits . "の" . $numbers . "です。";;
  }
}

$player = new Player();
$player->card("プレイヤー","スペード","4")
?>