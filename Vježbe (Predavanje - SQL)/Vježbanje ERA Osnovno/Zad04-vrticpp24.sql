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



select * from strucnaSprema;
insert into strucnaSprema(sifra,naziv)
values (1,'Sprema01'),
       (2,'Sprema02'),
       (3,'Sprema03'),
       (4,'Sprema04'),
       (5,'Sprema05');

select * from djeca;
insert into djeca(sifra,ime,prezime)
values (1,'DIme01','DPrezime01'),
       (2,'DIme02','DPrezime02'),
       (3,'DIme03','DPrezime03'),
       (4,'DIme04','DPrezime04'),
       (5,'DIme05','DPrezime05');


select * from odgajateljica;
insert into odgajateljica(sifra,ime,prezime,oib,iban,strucnaSprema)
values (1,'OIme01','OPrezime01',28530623369,12345678911,1),
       (2,'OIme02','OPrezime02',37596312767,12345678911,3),
       (3,'OIme03','OPrezime03',23478879689,12345678911,5),
       (4,'OIme04','OPrezime04',34103023910,12345678911,4),
       (5,'OIme05','OPrezime05',85304025778,12345678911,2);


select * from odgojnaSkupina;
insert into odgojnaSkupina(sifra,naziv,odgajateljica,djeca)
values (1,'Skupina01',5,3),
       (2,'Skupina02',3,5),
       (3,'Skupina03',1,2),
       (4,'Skupina04',2,4),
       (5,'Skupina05',4,1);
       

select * from vrtic;
insert into vrtic(sifra,naziv,odgojnaSkupina)
values (1,'Vrtic01',4),
       (2,'Vrtic02',2),
       (3,'Vrtic03',5),
       (4,'Vrtic04',3),
       (5,'Vrtic05',1);