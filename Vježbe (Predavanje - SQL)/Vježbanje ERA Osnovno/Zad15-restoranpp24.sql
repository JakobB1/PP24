drop database if exists restoranpp24;
create database restoranpp24;
use restoranpp24;

create table restoran (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    kategorije int not null
);

create table kategorije (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    jelo int not null
);

create table jelo (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    pice int not null
);

create table pice (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    jelo int not null
);

alter table restoran add foreign key (kategorije) references kategorije (sifra);

alter table kategorije add foreign key (jelo) references jelo (sifra);

alter table jelo add foreign key (pice) references pice (sifra);

alter table pice add foreign key (jelo) references jelo (sifra);