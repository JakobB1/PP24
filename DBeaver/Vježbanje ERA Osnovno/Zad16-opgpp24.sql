drop database if exists opgpp24;
create database opgpp24;
use opgpp24;

create table opg (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    proizvodi int not null
);

create table proizvodi (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    sirovine int not null
);

create table sirovine (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    proizvodi int not null
);

create table djelatnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    proizvodi int not null
);


alter table opg add foreign key (proizvodi) references proizvodi (sifra);

alter table proizvodi add foreign key (sirovine) references sirovine (sifra);

alter table sirovine add foreign key (proizvodi) references proizvodi (sifra);

alter table djelatnik add foreign key (proizvodi) references proizvodi (sifra);