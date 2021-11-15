drop database if exists frizerskipp24;
create database frizerskipp24;
use frizerskipp24;

create table salon (
    sifra int not null primary key auto_increment,
    djelatnica int not null,
    usluga int not null
);

create table djelatnica (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    iban varchar(32),
    korisnik int not null
);

create table korisnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    email varchar(20),
    usluga int
);

create table usluga (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    cijena decimal(18,2)
);

alter table salon add foreign key (usluga) references usluga (sifra);
alter table salon add foreign key (djelatnica) references djelatnica (sifra);

alter table korisnik add foreign key (usluga) references usluga (sifra);

alter table djelatnica add foreign key (korisnik) references korisnik (sifra);