drop database if exists srednjapp24;
create database srednjapp24;
use srednjapp24;

create table skola (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    razredi int not null
);

create table razredi (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    ucenici int not null,
    profesori int not null
);

create table ucenici (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null
);

create table profesori (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    iban varchar(50),
    razredi int not null
);


alter table skola add foreign key (razredi) references razredi (sifra);

alter table razredi add foreign key (ucenici) references ucenici (sifra);

alter table razredi add foreign key (profesori) references profesori (sifra);
alter table profesori add foreign key (razredi) references razredi (sifra);