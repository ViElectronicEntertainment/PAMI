create database Adarath;
use Adarath;

create table user(
	id int not null auto_increment primary key,
	firtsname varchar(500) not null,
	lastname varchar(500) not null,
	username varchar(100) not null unique,
	email varchar(255) not null unique,
	password varchar(255) not null,
	Leadership smallint,
	Innovation smallint,
	Teamwork smallint,
	Management smallint,
	Design smallint,
	Development smallint,
	ProblemResolution smallint,
	Sales smallint,
	Communication smallint,
	Community smallint,
	created_at datetime not null
);