drop database if exists firmapp24;
create database firmapp24;
use firmapp24;

create table projekt(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2)
);

create table programer(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    datumrodenja datetime 
);

create table sudjeluje(
    projekt int not null,
    programer int not null,
    datumpocetka datetime,
    datumkraja datetime
);


alter table sudjeluje add foreign key (programer) references programer(sifra);
alter table sudjeluje add foreign key (projekt) references projekt(sifra);