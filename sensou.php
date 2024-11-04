<?php

require_once('Card.php');
require_once('Deck.php');
require_once('Player.php');

// ゲームの開始
echo "戦争を開始します。\n";
$deck = new Deck();
$player1 = new Player("プレイヤー1", $deck->deal());
$player2 = new Player("プレイヤー2", $deck->deal());

echo "カードが配られました。\n";

while ($player1->hasCards() && $player2->hasCards()) {
    echo "戦争！\n";
    
    $card1 = $player1->drawCard();
    $card2 = $player2->drawCard();

    echo "プレイヤー1のカードは{$card1}です。\n";
    echo "プレイヤー2のカードは{$card2}です。\n";

    // カードの強さを定義
    $rankOrder = array_flip(['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A']);
    if ($rankOrder[$card1->rank] > $rankOrder[$card2->rank]) {
        $player1->addCards([$card1, $card2]);
        echo "プレイヤー1が勝ちました。プレイヤー1はカードを2枚もらいました。\n";
    } elseif ($rankOrder[$card1->rank] < $rankOrder[$card2->rank]) {
        $player2->addCards([$card1, $card2]);
        echo "プレイヤー2が勝ちました。プレイヤー2はカードを2枚もらいました。\n";
    } else {
        echo "引き分けです。\n";
        // 引き分けの場合は、再度カードを出す（簡略化のため省略可能）
    }

    // 勝者が場札を受け取った後、手札が空になっていないか確認
    if (!$player1->hasCards()) {
        echo "プレイヤー1の手札がなくなりました。\n";
    }
    if (!$player2->hasCards()) {
        echo "プレイヤー2の手札がなくなりました。\n";
    }
}

// 結果の表示
echo "戦争を終了します。\n";
echo "プレイヤー1の手札の枚数は{$player1->totalCards()}枚です。\n";
echo "プレイヤー2の手札の枚数は{$player2->totalCards()}枚です。\n";

if ($player1->totalCards() > $player2->totalCards()) {
    echo "プレイヤー1が1位、プレイヤー2が2位です。\n";
} elseif ($player1->totalCards() < $player2->totalCards()) {
    echo "プレイヤー2が1位、プレイヤー1が2位です。\n";
} else {
    echo "引き分けです。\n";
}
?>