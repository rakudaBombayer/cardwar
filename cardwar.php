<?php

$text = "戦争を開始します。"."\n"."カードが配られました"."\n";
$war = "戦争!"."\n";
echo $text;

echo $war;


//数字の配列
$numbers = ["A", "K", "Q", "J","10","9","8","7","6","5","4","3","2"];
$num1 = $numbers[array_rand($numbers)];

// マークの配列
$suits = ['ダイヤ', 'ハート', 'スペード', 'クローバー'];
$suit = $suits[array_rand($suits)];

echo "プレイヤー1のカードは". $suit . "の" . $num1."です."."\n";

$suit = $suits[array_rand($suits)];
$num2 = $numbers[array_rand($numbers)];
echo "プレイヤー2のカードは". $suit . "の" . $num2."です."."\n";



?>