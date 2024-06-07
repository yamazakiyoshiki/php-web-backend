/*
テーブルの切り捨て

特徴：
- rollbackで戻せない
- deleteより高速
- where句は使用不可
- auto_incrementは初期値となる
*/

truncate test_db.txn_stocks;

start transaction;
delete from test_db.txn_stocks;
rollback;

select * from test_db.txn_stocks;