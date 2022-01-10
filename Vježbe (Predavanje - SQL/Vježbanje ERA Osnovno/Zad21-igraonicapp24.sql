drop database if exists igraonicapp24;
create database igraonicapp24;
use igraonicapp24;

create table igraonica (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    skupina int not null
);

create table skupina (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    djeca int not null
);

create table djeca (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    skupina int not null
);

create table teta (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    skupina int not null
);


alter table igraonica add foreign key (skupina) references skupina(sifra);

alter table djeca add foreign key (skupina) references skupina(sifra);
alter table skupina add foreign key (djeca) references djeca(sifra);

alter table teta add foreign key (skupina) references skupina(sifra);