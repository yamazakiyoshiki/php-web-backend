select * from test_db.txn_stocks
-- where amount > 50
order by product_id desc,
shop_id asc;