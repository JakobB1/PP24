drop database if exists fakultetpp24;
create database fakultetpp24;
use fakultetpp24;

create table studenti (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    rok int not null
);

create table rok (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    studenti int not null
);


alter table studenti add foreign key (rok) references rok(sifra);

alter table rok add foreign key (studenti) references studenti(sifra);