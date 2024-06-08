<?php
/**
 * 理解度チェック（DB操作基礎）
 */

$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 以下の操作を行ってみてください。
// またtry, catchによってコードを囲んでください。

/**
 * 問１：
 * 店舗Cの全ての商品の在庫数に+10を足し合わせる
 */
try {
  $result = $conn->exec('update txn_stocks set amount
  = amount + 10 where shop_id = 3');
  echo '成功しました。<br>';
} catch (PDOException $e) {
  echo $e . '<br>';
  echo '例外処理が発生しました。<br>';
}

/**
 * 問２：
 * 店舗Dを以下のように追加してください。
 */
/**
 * name: '店舗D'
 * pref_id: 4
 */
try {
  $conn->exec(
    'insert into mst_shops (id, name, pref_id, updated_by) values
    (4, "店舗D", 4, "yamazaki")'
  );
  echo '成功しました。<br>';
} catch (PDOException $e) {
  echo $e . '<br>';
  echo '例外処理が発生しました。<br>';
}

/**
 * 問３：
 * 店舗Aの椅子の在庫数を取得してください。
 */
try {
  $p_id = $conn->query("
  select id from mst_products mp
  where mp.name = '椅子'
  ")->fetch()['id'];

  $s_id = $conn->query("
  select id from mst_shops ms
  where ms.name = '店舗A'
  ")->fetch()['id'];

  $amount = $conn->query("
  select amount from txn_stocks ts
  where ts.shop_id = {$s_id}
  and ts.product_id = {$p_id}
  ")->fetch()['amount'];


  var_dump($p_id->fetchAll()[0]['id']);
  echo $p_id->fetchAll();
  echo $s_id;
  echo $amount;

  $result = $conn->query(
    'select stocks from txn_stocks ts
    inner join mst_products ms
    on ts.product_id = ms.id
    where shop_id = 1 and
    ms.name = "椅子"'
  );
  echo $result . '<br>';
  echo '成功しました。<br>';
} catch (PDOException $e) {
  echo $e . '<br>';
  echo '例外処理が発生しました。<br>';
}