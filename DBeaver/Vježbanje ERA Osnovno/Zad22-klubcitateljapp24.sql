drop database if exists klubcitateljapp24;
create database klubcitateljapp24;
use klubcitateljapp24;

create table klub (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    clan int not null
);

create table clan (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    knjiga int not null
);

create table knjiga (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    clan int not null,
    vlasnik int not null
);

create table vlasnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    clan int not null
);


alter table klub add foreign key (clan) references clan(sifra);

alter table clan add foreign key (knjiga) references knjiga(sifra);

alter table knjiga add foreign key (vlasnik) references vlasnik(sifra);
alter table knjiga add foreign key (clan) references clan(sifra);

alter table vlasnik add foreign key (clan) references clan(sifra);