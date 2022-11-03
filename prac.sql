create table `user`(
    id int(2) not null auto_increment primary key,
    username varchar(20) not null,
    password varchar(20) not null
);


create table content (
 id int(2) not null auto_increment primary key,
 name varchar(20) not null,
 file varchar(200) not null,
 para varchar(200) not null,
 link varchar(200) not null
);