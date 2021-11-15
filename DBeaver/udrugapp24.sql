drop database if exists udrugapp24;
create database udrugapp24;
use udrugapp24;

create table udruga (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    skrbnik int not null
);

create table skrbnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    zivotinja int not null
);

create table zivotinja (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prostor int not null
);

create table prostor (
    sifra int not null primary key auto_increment,
    naziv varchar(50)
);

alter table udruga add foreign key (skrbnik) references skrbnik (sifra);

alter table skrbnik add foreign key (zivotinja) references zivotinja (sifra);

alter table zivotinja add foreign key (prostor) references prostor (sifra);