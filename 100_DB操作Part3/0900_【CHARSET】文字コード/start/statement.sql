create table test_db.char_test (
  mb4 varchar(20) character set 'utf8mb4',
  mb3 varchar(20) character set 'utf8'
);

insert into test_db.char_test(mb4) values ('😄');
insert into test_db.char_test(mb3) values ('😄');

select * from test_db.char_test;