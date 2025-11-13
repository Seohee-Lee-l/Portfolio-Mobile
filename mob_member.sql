create table mob_member (
    id varchar(20) not null,
    pass varchar(20) not null,
    name varchar(50) not null,
    hp varchar(20) not null,
    email varchar(80) not null,
    primary key(id)
)engine=innoDB charset=utf8;