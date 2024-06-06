insert into test_db.mst_prefs (name, updated_by) values ('山形', 'yamazaki'),
('宮城', 'yamazaki');

select * from mst_prefs;

select mp.name "都道府県名", ms.name "店舗名" from test_db.mst_prefs mp
left join test_db.mst_shops ms
on ms.pref_id  = mp.id ;

select mp.name "都道府県名", ms.name "店舗名" from test_db.mst_shops ms 
right join test_db.mst_prefs mp
on mp.id = ms.pref_id ;