<?php

echo "戦争を開始します。";
echo "カードが配られました";
echo "戦争!";

$ary = array("A", "K", "Q", "J","10","9","8","7","6","5","4","3","2");
$key = array_rand($ary, 1);
echo $ary[$key];


?>