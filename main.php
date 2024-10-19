<?php
include 'drawput.php';
// クラスのインスタンスを作成
$player1 = new Player();
$player2 = new Player();

// インスタンスを通して関数呼び出し
$player1->draw("プレイヤー1");
$player2->draw("プレイヤー2");

?>