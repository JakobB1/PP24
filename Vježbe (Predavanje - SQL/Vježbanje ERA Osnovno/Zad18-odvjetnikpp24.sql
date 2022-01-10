drop database if exists odvjetnikpp24;
create database odvjetnikpp24;
use odvjetnikpp24;

create table odvjetnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    obrana int not null
);

create table klijent (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null
);

create table obrana (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    klijent int not null,
    suradnici int not null
);

create table suradnici (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    klijent int not null,
    obrana int not null
);


alter table odvjetnik add foreign key (obrana) references obrana (sifra);

alter table obrana add foreign key (klijent) references klijent (sifra);
alter table obrana add foreign key (suradnici) references suradnici (sifra);

alter table suradnici add foreign key (obrana) references obrana (sifra);