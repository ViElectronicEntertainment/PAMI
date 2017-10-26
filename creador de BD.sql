create database pami;
use pami; 

create table user (
	id int not null auto_increment primary key,
	username varchar(50) not null,
	name varchar(50) not null,
	lastname varchar(50) not null,
	email varchar(255) not null,
	password varchar(60) not null,
	is_active boolean not null default 1,
	is_admin boolean not null default 0,
	created_at datetime
);

insert into user (username,password,is_admin,created_at) value ("admin",sha1(md5("admin")),1,NOW());

create table contact (
	id int not null auto_increment primary key,
	name varchar(50) not null,
	lastname varchar(50),
	email varchar(255) not null,
	address varchar(255),
	phone varchar(255),
	image varchar(255),
	is_active boolean not null default 1,
	created_at datetime not null
);

create table category (
	id int not null auto_increment primary key,
	name varchar(200) not null,
	description text
	);

insert into category (name) values ("Gamificacion"),("Desarrollo"),("Diseño");

create table project (
	id int not null auto_increment primary key,
	name varchar(200) not null,
	description text
	);
	
insert into project (name) values ("PAMI");

create table event(
	id int not null auto_increment primary key,
	title varchar(100) not null,
	description text not null,
	date_at varchar(50) not null,
	time_at varchar(50) not null,
	created_at datetime not null,
	category_id int ,
	user_id int not null,
	project_id int,
	foreign key (user_id) references user(id),
	foreign key (category_id) references category(id),
	foreign key (project_id) references project(id)
);
