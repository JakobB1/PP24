drop database if exists salonpp24;
create database salonpp24;
use salonpp24;

create table salon (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    djelatnica int not null
);

create table djelatnica (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    iban varchar(50),
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
       (2,'Usluga02',199.99),
       (3,'Usluga03',299.99),
       (4,'Usluga04',399.99),
       (5,'Usluga05',499.99);

select * from korisnik;
insert into korisnik(sifra,ime,email,usluga)
values (1,'Korisnik01','mail01@mail.com',4),
       (2,'Korisnik02','mail02@mail.com',2),
       (3,'Korisnik03','mail03@mail.com',5),
       (4,'Korisnik04','mail04@mail.com',2),
       (5,'Korisnik05','mail05@mail.com',1);


select * from djelatnica;
insert into djelatnica(sifra,ime,iban,korisnik)
values (1,'Djelatnica01',12345678911,3),
       (2,'Djelatnica02',12345678911,1),
       (3,'Djelatnica03',12345678911,2),
       (4,'Djelatnica04',12345678911,5),
       (5,'Djelatnica05',12345678911,4);


select * from salon;
insert into salon(sifra,naziv,djelatnica)
values (1,'Salon01',5),
       (2,'Salon02',3),
       (3,'Salon03',1),
       (4,'Salon04',2),
       (5,'Salon05',4);