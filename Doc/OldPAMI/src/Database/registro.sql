create database pami;
use pami;

create table user(
	id int not null auto_increment primary key,
	firtsname varchar(500) not null,
	lastname varchar(500) not null,
	username varchar(100) not null unique,
	email varchar(255) not null unique,
	password varchar(255) not null,
	Leadership int (5) not null,
	Innovation int (5) not null,
	Teamwork int (5) not null,
	Management int (5) not null,
	Design int (5) not null,
	Development int (5) not null,
	ProblemResolution int (5) not null,
	Sales int (5) not null,
	Communication int (5) not null,
	Community int (5) not null,
	level int (5) not null,
	experience int (255) not null,
	created_at datetime not null
);