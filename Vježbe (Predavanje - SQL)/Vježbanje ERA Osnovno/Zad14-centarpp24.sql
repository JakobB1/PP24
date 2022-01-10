drop database if exists centarpp24;
create database centarpp24;
use centarpp24;

create table centar (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    trgovine int not null
);

create table trgovine (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    osoba int not null,
    sef int not null
);

create table osoba (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    trgovine int not null
);

create table sef (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    trgovine int not null,
    osoba int not null
);


alter table centar add foreign key (trgovine) references trgovine (sifra);

alter table trgovine add foreign key (osoba) references osoba (sifra);
alter table trgovine add foreign key (sef) references sef (sifra);

alter table osoba add foreign key (trgovine) references trgovine (sifra);

alter table sef add foreign key (osoba) references osoba (sifra);