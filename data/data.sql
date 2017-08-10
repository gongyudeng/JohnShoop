use test;
create table if not exists comments(
	id int(5) unsigned auto_increment primary key,
	username varchar(50) not null unique,
	email varchar(50) not null unique,
	url varchar(255),
	content text not null,
	pubTime date,
	face tinyint not null
);
