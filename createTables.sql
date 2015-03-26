-- connect to database;
-- ++++++++++++++++++++++++++++++++++++++++++++++
-- CREATE TABLES 
-- ++++++++++++++++++++++++++++++++++++++++++++++


------------------------------------------------
--  DDL Statements for table Users
------------------------------------------------
create table Users(
	username varchar(50) not null,
	email varchar(100),
	password varchar(20),
	fName varchar(50),
	lName varchar(50),
	phone varchar(15),
	unit integer(5),
	houseNumber integer(10),
	street varchar(50),
	city varchar(50),
	province varchar(50),
	postalCode varchar(8),
	creditCard integer(16),
	primary key(username)
);

------------------------------------------------
--  DDL Statements for table Products
------------------------------------------------
create table Products(
	id integer not null,
	name varchar(50),
	material varchar(20),
	price double not null,
	quantity integer,
	description varchar(200),
	imagePath varchar(100),
	primary key(id)
);

------------------------------------------------
--  DDL Statements for table transactions
------------------------------------------------
create table Transaction(
	transactionId integer not null,
	productid integer not null,
	quantity integer,
	total real,
	username varchar(50),
	timeOf TIME, 
	dateOf DATE,
	orderStatus integer,
	primary key(transactionid, productid),
	foreign key (productid) references Products(id),
	foreign key (username) references Users(username)
);

create table Reviews(
	reviewId integer not null,
	username varchar(50),
	productName varchar(50),
	rating varchar(10),
	review varchar(200),
	primary key(reviewID, username),
	foreign key (username) references Users(username)
);