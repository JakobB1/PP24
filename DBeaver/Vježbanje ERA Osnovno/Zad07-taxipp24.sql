drop database if exists taxipp24;
create database taxipp24;
use taxipp24;

create table tvrtka (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    vozilo int not null
);

create table vozilo (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    vozac int not null
);

create table vozac ( 
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    putnik int not null
);

create table putnik ( 
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    voznja int not null 
);

create table voznja (
    sifra int not null primary key auto_increment,
    vrijemeVoznje datetime,
    cijenaVoznje decimal(18,2)
);

alter table tvrtka add foreign key(vozilo) references vozilo(sifra);

alter table vozilo add foreign key(vozac) references vozac(sifra);

alter table vozac add foreign key(putnik) references putnik(sifra);

alter table putnik add foreign key(voznja) references voznja(sifra);