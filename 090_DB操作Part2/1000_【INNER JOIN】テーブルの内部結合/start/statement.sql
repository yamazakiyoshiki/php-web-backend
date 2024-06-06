select ms.name "店舗名", mp.name "都道府県名" from test_db.mst_shops ms
inner join test_db.mst_prefs mp
on ms.pref_id = mp.id
where ms.id = 1;

select ms.name "店舗名", mp.name "都道府県名"
from test_db.mst_shops ms, test_db.mst_prefs mp
where ms.pref_id = mp.id
and ms.id = 1;