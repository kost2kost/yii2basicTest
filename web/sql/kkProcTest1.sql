use yii2basic;
drop table if exists kkTableTest1;
create table kkTableTest1 (id INT);

drop procedure if exists kkProcTest1;

delimiter $$
use yii2basic $$
create procedure kkProcTest1(IN id_val INT) 
begin
    insert into kkTableTest1(id) Values(id_val);
end
$$

