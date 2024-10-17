<?php

$text = "戦争を開始します。"."\n"."カードが配られました"."\n";

echo $text;

$ary = array("A", "K", "Q", "J","10","9","8","7","6","5","4","3","2");
$key = array_rand($ary, 1);
echo $ary[$key];


?>