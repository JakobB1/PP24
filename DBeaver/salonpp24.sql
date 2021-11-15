drop database if exists salonpp24;
create database salonpp24;
use salonpp24;

create table salon (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    djelatnica int not null
);

create table djelatnica (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    iban varchar(50),
    korisnik int not null
);

create table korisnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    email varchar(20),
    usluga int not null
);

create table usluga (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2)
);


alter table salon add foreign key (djelatnica) references djelatnica (sifra);

alter table djelatnica add foreign key (korisnik) references korisnik (sifra);

alter table korisnik add foreign key (usluga) references usluga (sifra);