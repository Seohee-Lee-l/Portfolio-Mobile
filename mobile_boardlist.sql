create table mobile_boardlist (
    num int not null auto_increment,
    id varchar(20) not null,
    subject varchar(100) not null,
    content varchar(1000) not null,
    regist_day varchar(20),
    hit int,
    primary key(num)
)engine=innoDB charset=utf8;