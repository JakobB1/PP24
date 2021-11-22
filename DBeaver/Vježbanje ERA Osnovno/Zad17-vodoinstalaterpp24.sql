drop database if exists vodoinstalaterpp24;
create database vodoinstalaterpp24;
use vodoinstalaterpp24;

create table vodoinstalater (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    popravak int not null,
    segrt int not null
);

create table popravak (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    kvar int not null
);

create table kvar (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    popravak int not null
);

create table segrt (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null
);


alter table vodoinstalater add foreign key (popravak) references popravak (sifra);

alter table popravak add foreign key (kvar) references kvar (sifra);

alter table kvar add foreign key (popravak) references popravak (sifra);

alter table vodoinstalater add foreign key (segrt) references segrt (sifra);