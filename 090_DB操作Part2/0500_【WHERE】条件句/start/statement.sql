/*
条件句の設定
*/

-- = : 一致
-- <>, != : 非一致
-- >, >=, <, <= : 数値の比較
-- A and B : A かつ B
-- A or B : A または B
-- () : 条件をくくる
-- like : %で部分一致検索
-- in : いずれかの値に一致
-- not in : いずれの値にも一致しない
-- between A and B: A から B の値 
-- is not null : null以外に一致
-- is null : nullに一致

-- 以上

select * from test_db.txn_stocks
where product_id = 1;

select * from test_db.txn_stocks
where product_id != 1;

select * from test_db.txn_stocks
where amount >= 60;

select * from test_db.txn_stocks
where product_id = 1 and shop_id = 1;

select * from test_db.txn_stocks
where product_id = 1 or shop_id = 1;

select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1)
or (product_id = 2 and shop_id = 2);

select * from test_db.mst_shops
where name like '店%A';

select * from test_db.mst_shops
where name in ('店舗A', '店舗B');

select * from test_db.mst_shops
where name not in ('店舗A', '店舗B');

select * from test_db.txn_stocks
where amount between 60 and 100;

select * from test_db.txn_stocks
where amount is not null;

alter table test_db.txn_stocks
modify column amount int(10) unsigned not null;

delete from test_db.txn_stocks
where product_id = 3 and shop_id = 1;

insert into test_db.txn_stocks (product_id, shop_id, updated_by)
values (3, 1, 'yamazaki');

desc test_db.txn_stocks ;