start transaction;

insert into test_db.txn_stocks(product_id, shop_id, amount, updated_by)
values (1, 3, 20, 'yamazaki');

update test_db.txn_stocks set amount = 1000
where product_id = 1 and shop_id = 1;

select * from test_db.txn_stocks
where product_id = 1 and shop_id = 3;


commit;

rollback;

select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1)
or (product_id = 1 and shop_id = 3);
