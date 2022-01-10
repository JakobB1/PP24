drop database if exists nakladnikpp24;
create database nakladnikpp24;
use nakladnikpp24;

create table nakladnik (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    djela int not null,
    mjesto int not null
);

create table djela (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    nakladnik int not null
);

create table mjesto (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    nakladnik int not null
);


alter table nakladnik add foreign key (djela) references djela (sifra);
alter table nakladnik add foreign key (mjesto) references mjesto (sifra);

alter table djela add foreign key (nakladnik) references nakladnik (sifra);

alter table mjesto add foreign key (nakladnik) references nakladnik (sifra);