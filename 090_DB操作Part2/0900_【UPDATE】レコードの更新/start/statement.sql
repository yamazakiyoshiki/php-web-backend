select * from test_db.txn_stocks
where product_id = 1 and shop_id = 1;

delete from test_db.txn_stocks
where product_id = 1 and shop_id = 1;

update test_db.txn_stocks set amount = amount - 10
where product_id =1 and shop_id = 1;

update test_db.txn_stocks set amount = amount - 10, delete_flg = 1
where product_id =1 and shop_id = 1;

show create table test_db.txn_stocks ;

select * from test_db.mst_shops;

update test_db.mst_shops set id = 10
where id = 1;

select * from test_db.txn_stocks;