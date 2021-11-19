drop database if exists urarpp24;
create database urarpp24;
use urarpp24;

create table urar (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    segrt int not null
);

create table korisnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    sat int not null
);

create table sat (
    sifra int not null primary key auto_increment,
    nazivMarke varchar(50),
    popravak int not null
);

create table popravak (
    sifra int not null primary key auto_increment,
    datumPopravka datetime
);

create table segrt (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    popravak int not null
);


alter table korisnik add foreign key(sat) references sat(sifra);

alter table sat add foreign key(popravak) references popravak(sifra);

alter table segrt add foreign key(popravak) references popravak(sifra);

alter table urar add foreign key(segrt) references segrt(sifra);