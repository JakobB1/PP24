drop database if exists doktorpp24;
create database doktorpp24;
use doktorpp24;

create table doktor (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    pacijent int not null,
    sestra int not null
);

create table pacijent (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    lijecenje int not null
);

create table sestra (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    doktor int not null
);

create table lijecenje (
    sifra int not null primary key auto_increment,
    nazivTerapije varchar(50)
);

alter table doktor add foreign key(pacijent) references pacijent(sifra);

alter table pacijent add foreign key(lijecenje) references lijecenje(sifra);

alter table sestra add foreign key(doktor) references doktor(sifra);