<?php

/**
 * 商品名 => [価格, 在庫数]
 */
$products = [
    'table' => [1000, 2],
    'chair' => [500, 4],
    'bed' => [10000, 1],
    'light' => [5000, 1]
];

/**
 * 問１：商品一覧
 * 
 * 商品一覧
 * tableは1000円で2個存在します。
 * chairは500円で4個存在します。
 * bedは10000円で2個存在します。
 * lightは5000円で1個存在します。
 */
echo '<div>商品一覧</div>';
foreach ($products as $key => $val) {
    // print_r($v);
    $p_name = $key;
    $p_price = $val[0];
    $p_stock = $val[1];
    echo "<div>", "{$p_name}は{$p_price}円で{$p_stock}個存在します。", "</div>";
}


/**
 * 問２：商品購入
 * 
 * $cartの品物を買いたいと想定して、
 * $productsの在庫数が足りている場合、足りていない場合で
 * 以下のように画面に表示してください。
 * 
 * 商品購入
 * tableを1個ください。
 * はい。ありがとうございます。 <- 足りている場合
 * bedを2個ください。
 * すいません。bedは1個しかありません。 <- 足りていない場合
 */

// 購入希望 商品数
$cart = [
    'table' => 1,
    'bed' => 2,
];
echo '<div>商品購入</div>';
foreach ($cart as $c_name => $c_num) {
    echo "<div>", "{$c_name}を{$c_num}個ください。", "</div>";

    $p_num = $products[$c_name][1];

    if ($p_num >= $c_num) {
        echo "<div>はいありがとうございます。</div>";
    } else {
        echo "<div>", "{$c_name}は{$p_num}個しかありません。", "</div>";
    }
}
