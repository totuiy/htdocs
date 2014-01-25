create table reviews (
	number int not null auto_increment primary key,
	id int,
	review varchar(255),
	created datetime,
	modified datetime
);
