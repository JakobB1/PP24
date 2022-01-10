select * from smjer;

update smjer set cijena=4230.89 where sifra=1;

update smjer set cijena=1000, certificiran=true where sifra=3;

update smjer set naziv='PHP Development' where sifra=2;

select * from grupa;

#update grupa set predavac=2 where sifra=1;

select * from predavac;

# zadatak 1
# unijeti predavača Shaquille O'Neal

select * from osoba;
insert into osoba(sifra,ime,prezime,email)
values (null,'Shaquille','O''Neal','shaki@gmail.com');


select * from predavac;
insert into predavac(sifra,osoba)
values (null,22);

select * from osoba;
update osoba set oib='92876347978' where sifra=16;

# DELETE naredba

select * from smjer;

delete from smjer where sifra=1;
delete from grupa where sifra=1;
delete from clan where grupa=1;