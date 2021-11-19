drop database if exists muzejpp24;
create database muzejpp24;
use muzejpp24;

create table muzej (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    izlozba int not null
);

create table izlozba ( 
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    djela int not null,
    sponzor int not null
);

create table djela (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null
);

create table kustos (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    izlozba int not null
);

create table sponzor (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null
);


alter table muzej add foreign key(izlozba) references izlozba(sifra);

alter table kustos add foreign key(izlozba) references izlozba(sifra);

alter table izlozba add foreign key(djela) references djela(sifra);
alter table izlozba add foreign key(sponzor) references sponzor(sifra);