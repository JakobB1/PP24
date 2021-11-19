drop database if exists udrugapp24;
create database udrugapp24;
use udrugapp24;

create table udruga (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    skrbnik int not null
);

create table skrbnik (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    zivotinja int not null
);

create table zivotinja (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prostor int not null
);

create table prostor (
    sifra int not null primary key auto_increment,
    naziv varchar(50)
);

alter table udruga add foreign key (skrbnik) references skrbnik (sifra);

alter table skrbnik add foreign key (zivotinja) references zivotinja (sifra);

alter table zivotinja add foreign key (prostor) references prostor (sifra);



select * from prostor;
insert into prostor(sifra,naziv)
values (1,'Prostor01'),
       (2,'Prostor02'),
       (3,'Prostor03'),
       (4,'Prostor04'),
       (5,'Prostor05');

select * from zivotinja;
insert into zivotinja(sifra,ime,prostor)
values (1,'Zivotinja01',3),
       (2,'Zivotinja02',2),
       (3,'Zivotinja03',4),
       (4,'Zivotinja04',5),
       (5,'Zivotinja05',1);


select * from skrbnik;
insert into skrbnik(sifra,ime,prezime,oib,zivotinja)
values (1,'Ime01','Prezime01',74251071662,3),
       (2,'Ime02','Prezime02',14904892593,4),
       (3,'Ime03','Prezime03',03546863665,1),
       (4,'Ime04','Prezime04',80085546098,5),
       (5,'Ime05','Prezime05',38397377248,2);


select * from udruga;
insert into udruga(sifra,naziv,skrbnik)
values (1,'Udruga01',5),
       (2,'Udruga02',4),
       (3,'Udruga03',2),
       (4,'Udruga04',1),
       (5,'Udruga05',3);