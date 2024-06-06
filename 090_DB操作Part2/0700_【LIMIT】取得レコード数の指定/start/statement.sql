select * from test_db.txn_stocks
order by product_id desc,
shop_id asc
limit 2 offset 1;
-- limit 1, 2;