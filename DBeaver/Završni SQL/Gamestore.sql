drop database if exists gamestore;
create database gamestore;
use gamestore;

create table developers (
    developer_id int not null primary key auto_increment,
    name varchar(50),
    website varchar(50)
);

create table publishers (
    publisher_id int not null primary key auto_increment,
    name varchar(50),
    country varchar(50),
    website varchar(50)
);

create table games (
    game_id int not null primary key auto_increment,
    name varchar(50),
    developers int,
    publishers int,
    genre varchar(50),
    price int,
    review int,
    age_limit int,
    release_date varchar(50),
    description varchar(50)
);

create table users (
    user_id int not null primary key auto_increment,
    name varchar(50),
    surname varchar(50),
    username varchar (50),
    password int,
    gender varchar(50),
    age int,
    email varchar(50),
    country varchar(50)
);

create table payments (
    payment_id int not null primary key auto_increment,
    users int,
    payment_type varchar(50),
    card_number bigint(16),
    valid boolean
);

create table orders (
    order_id int not null primary key auto_increment,
    users int,
    games int,
    price int(5),
    payment_id int,
    `date` datetime
);

create table wishlists (
    wish_id int not null primary key auto_increment,
    users int,
    games int,
    `date` datetime
);

alter table games add foreign key (developers) references developers(developer_id);
alter table games add foreign key (publishers) references publishers(publisher_id);

alter table wishlists add foreign key (games) references games(game_id);
alter table wishlists add foreign key (users) references users(user_id);

alter table orders add foreign key (games) references games(game_id);
alter table orders add foreign key (users) references users(user_id);

alter table payments add foreign key (users) references users(user_id);