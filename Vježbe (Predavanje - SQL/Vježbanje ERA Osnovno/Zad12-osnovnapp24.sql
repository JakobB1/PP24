drop database if exists osnovnapp24;
create database osnovnapp24;
use osnovnapp24;

create table skola (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    radionice int not null
);

create table radionice (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    djeca int not null
);

create table djeca (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    radionice int not null
);

create table uciteljica (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    iban varchar(50),
    radionice int not null
);


alter table skola add foreign key (radionice) references radionice (sifra);

alter table radionice add foreign key (djeca) references djeca (sifra);

alter table djeca add foreign key (radionice) references radionice (sifra);

alter table uciteljica add foreign key (radionice) references radionice (sifra);