create database boda;
grant all on boda.* to dbuser@localhost identified by '5TNKr847';

use boda

create table rate (
	id int not null auto_increment primary key,
	rate varchar(255),
	remote_addr varchar(15),
	user_agent varchar(255),
	rate_date date,
	created datetime,
	modified datetime,
	unique unique_answer(remote_addr, user_agent, rate_date)
);
