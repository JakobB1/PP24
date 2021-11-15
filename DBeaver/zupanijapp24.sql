drop database if exists zupanijapp24;
create database zupanijapp24;
use zupanijapp24;

create table zupanija(
   sifra int not null primary key auto_increment,
   naziv varchar(50) not null,
   zupan varchar(50) not null
);

create table opcina(
   sifra int not null primary key auto_increment,
   zupanija int,
   naziv varchar(50)
);

alter table opcina add foreign key (zupanija) references zupanija(sifra);