create database tieba charset utf8;
use tieba;

create table thread(
  tid int not null auto_increment primary key,
  username varchar(20) not null default '',
  title varchar(30) not null default '',
  content text,
  pubtime int unsigned not null default 0
)engine myisam charset utf8;


create table reply(
  rid int not null auto_increment primary key,
  tid int not null default 0,
  username varchar(20) not null default '',
  content text,
  reptime int unsigned not null default 0
)engine myisam charset utf8;
