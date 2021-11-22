drop database if exists kudpp24;
create database kudpp24;
use kudpp24;

create table kud (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    nastup int not null
);

create table nastup (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    clan int not null,
    mjesto int not null
);

create table clan (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    nastup int not null
);

create table mjesto (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null
);


alter table kud add foreign key(nastup) references nastup (sifra);

alter table nastup add foreign key(clan) references clan (sifra);

alter table clan add foreign key(nastup) references nastup (sifra);

alter table nastup add foreign key(mjesto) references mjesto (sifra);