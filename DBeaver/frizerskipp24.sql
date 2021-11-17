drop database if exists frizerskipp24;
create database frizerskipp24;
use frizerskipp24;

create table salon (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    djelatnica int not null
);

create table djelatnica (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    iban varchar(32),
    korisnik int not null
);

create table korisnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    email varchar(20),
    usluga int not null
);

create table usluga (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2)
);


alter table salon add foreign key (djelatnica) references djelatnica (sifra);

alter table djelatnica add foreign key (korisnik) references korisnik (sifra);

alter table korisnik add foreign key (usluga) references usluga (sifra);



select * from usluga;
insert into usluga(sifra,naziv,cijena)
values (1,'Usluga01',99.99),
       (2,'Usluga01',199.99),
       (3,'Usluga01',299.99),
       (4,'Usluga01',399.99),
       (5,'Usluga01',499.99);

select * from korisnik;
insert into korisnik(sifra,ime,prezime,usluga)
values


select * from djelatnica;
insert into djelatnica(sifra,ime,prezime,korisnik)
values


select * from salon;
insert into salon(sifra,naziv,djelatnica)
values