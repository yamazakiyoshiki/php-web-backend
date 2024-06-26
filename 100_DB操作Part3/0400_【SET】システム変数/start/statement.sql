/*
システム変数

- 値の取得
@@session.変数名: 現在のセッション内での値を取得
@@local.変数名: @@sessionと同じ
@@global.変数名: サーバー上の値を取得
@@変数名: session -> global の順番で変数を取得

- 値の変更
set session: 現在のセッション内で有効
set local: SESSIONと同じ
set global: 全てのセッション（サーバー全体）で有効（DB再起動まで）
※省略した場合はセッション変数を変更

*/

show global variables like '%auto%';

select @@session.autocommit;

set @@session.autocommit = 0;