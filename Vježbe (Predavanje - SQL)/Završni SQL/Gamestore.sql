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
    price decimal(15,2),
    review int,
    age_limit int,
    release_date varchar(50),
    description varchar(300)
);

create table users (
    user_id int not null primary key auto_increment,
    name varchar(50),
    surname varchar(50),
    username varchar (50),
    password bigint(100),
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




insert into developers (developer_id,name,website) values 
(1, 'FromSoftware Inc.', 'https://www.fromsoftware.jp/ww/'),
(2, '2K Games', 'https://2k.com/en-US/');
select * from developers;



insert into publishers (publisher_id,name,country,website) values 
(1, 'Bandai Namco Entertainment Inc.', 'Japan', 'https://www.bandainamcoent.co.jp/english/'),
(2, 'Take-Two Interactive Software, Inc.', 'USA', 'https://www.take2games.com/');
select * from publishers;



insert into games (game_id,name,developers,publishers,genre,price,review,age_limit,release_date,description) values 
(1, 'Dark Souls', 1, 1, 'Action RPG, Fantasy, Multiplayer, Co-op', 19.99, 9, 18, '22-09-2011', 'Dark Souls takes place in the fictional kingdom of Lordran, where players assume the role of a cursed undead character who begins a pilgrimage to discover the fate of their kind.'),
(2, 'Bioshock', 2, 2, 'FPS, Action, Horror, Singleplayer', 5.99, 10, 18, '21-08-2007', 'BioShock is set in 1960. The player guides the protagonist, Jack, after his airplane crashes in the ocean near the bathysphere terminus that leads to the underwater city of Rapture.');
select * from games;



insert into users (user_id,name,surname,username,password,gender,age,email,country) values 
(1, 'NameExample01', 'SurnameExample01', 'UsernameExample01', 123456, 'GenderExample01', 20, 'email01@example.com', 'CountryExample01'),
(2, 'NameExample02', 'SurnameExample02', 'UsernameExample02', 123456, 'GenderExample02', 20, 'email02@example.com', 'CountryExample02');
select * from users;



insert into orders (order_id,users,games,price,payment_id,`date`) values
(1, 1, 1, 19.99, 1, '2021-12-01 11:59:00'),
(2, 2, 2, 5.99, 2, '2020-12-01 11:59:00');

select * from orders;



insert into wishlists (wish_id,users,games,`date`) values
(1, 1, 1, '2021-12-01 11:59:00'),
(2, 2, 2, '2020-12-01 11:59:00');

select * from wishlists;



insert into payments (payment_id,users,payment_type,card_number,valid) values
(1, 1, 'Visa', 4539791458727308, true),
(2, 1, 'Mastercard', 3729540283127564, false);

select * from payments;