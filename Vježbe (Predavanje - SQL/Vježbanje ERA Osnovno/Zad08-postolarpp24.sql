drop database if exists postolarpp24;
create database postolarpp24;
use postolarpp24;

create table postolar (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    segrt int not null
);

create table korisnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    obuca int not null
);

create table obuca (
    sifra int not null primary key auto_increment,
    nazivMarke varchar(50),
    popravak int not null
);

create table popravak (
    sifra int not null primary key auto_increment,
    datumPopravka datetime
);

create table segrt (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    popravak int not null
);


alter table korisnik add foreign key(obuca) references obuca(sifra);

alter table obuca add foreign key(popravak) references popravak(sifra);

alter table segrt add foreign key(popravak) references popravak(sifra);

alter table postolar add foreign key(segrt) references segrt(sifra);