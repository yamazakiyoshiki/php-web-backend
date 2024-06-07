grant all on test_db.* to 'test_user'@'localhost';
grant update, insert on test_db.* to 'test_user'@'localhost';
grant create, alter on test_db.* to 'test_user'@'localhost';

show grants for 'test_user'@'localhost';

revoke all on test_db.* from 'test_user'@'localhost';