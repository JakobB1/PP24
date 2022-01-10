select * from smjer;

# filtriranja kolona
# * sve kolone
select * from smjer where sifra=1;

# naziv kolone
select sifra,naziv from smjer;

select sifra, sifra, naziv, cijena, naziv from smjer;

select *, naziv from smjer;

# konstanta 
select 'Osijek', naziv from smjer;

# zamjensko ime kolone se definira s as
select 'Osijek' as grad, 5000 as cijena, naziv as smjer from smjer;

# izraz
select now(), length(naziv), concat(naziv,'smjer') from smjer;


# Izvucite imena i prezimena osoba
select ime, prezime from osoba;

# Izlistajte sve nazive grupa



# filtriranje redova where
# operatori uspoređivanja
select * from smjer where sifra=1;
select * from smjer where sifra>1;
select * from smjer where sifra<1;
select * from smjer where sifra>=1;
select * from smjer where sifra<=1;
select * from smjer where sifra!=1;
select * from smjer where sifra<>1;


# logički operatori - booleova algebra
select * from smjer where sifra>1 and sifra<3;
select * from smjer where sifra=1 and sifra=3;
select * from smjer where not (sifra=1 and sifra=3);

# ostali operatori 
select * from smjer where naziv='Java programiranje';
select * from smjer where naziv like '%pr%'; #svi redovi koji u nazivu imaju niz znakova pr bilo gdje
select * from smjer where naziv like '%J%';
select * from osoba where prezime like '%G%';

# ime osobe ne završava s slovom a 
select * from osoba where ime not like '%a';


select * from osoba where oib!=null; # kriva sintaksa
select * from osoba where oib is not null;
select * from osoba where oib is null;

select * from osoba where sifra=3 or sifra=5 or sifra=7;
select * from osoba where sifra in (3,5,7);


select * from osoba where sifra>=5 and sifra<=10;
select * from osoba where sifra between 5 and 10;



# Baza mjesta
select * from mjesto;
# odaberite sva mjesta koja se nalaze u Osječko baranjskoj 
# županiji


select * from mjesto where postanskibroj like '31%';


# odaberite sva mjesta koja u sebi imaju niz znakova ac
select * from mjesto where naziv like '%ac%';


# baza knjiznica
# odaberite sve autore za koje ne znamo datum rođenja

select * from autor;
select * from autor where datumrodenja is null;

select * from autor;
insert into autor(sifra,ime,prezime)
values (4,'Jakob','Brkic');
select * from autor where ime='Jakob';