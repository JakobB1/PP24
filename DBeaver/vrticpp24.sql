drop database if exists vrticpp24;
create database vrticpp24;
use vrticpp24;

create table vrtic (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    odgojnaSkupina int not null
);

create table odgojnaSkupina (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    odgajateljica int not null,
    djeca int not null
);

create table odgajateljica (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    iban varchar(50),
    strucnaSprema int not null
);

create table djeca (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50)
);

create table strucnaSprema (
    sifra int not null primary key auto_increment,
    naziv varchar(50)
);


alter table vrtic add foreign key (odgojnaSkupina) references odgojnaSkupina (sifra);

alter table odgojnaSkupina add foreign key (djeca) references djeca(sifra);
alter table odgojnaSkupina add foreign key (odgajateljica) references odgajateljica(sifra);

alter table odgajateljica add foreign key (strucnaSprema) references strucnaSprema(sifra);