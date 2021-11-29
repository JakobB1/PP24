select naziv, smjer from grupa;

# dokumentacija

select a.naziv, b.naziv as smjer
from grupa a inner join smjer b on a.smjer=b.sifra;

# drugi načini 1
select grupa.naziv, smjer.naziv as smjer
from grupa inner join smjer  on grupa.smjer=smjer.sifra;

# drugi način 2
select grupa.naziv, smjer.naziv as smjer
from grupa, smjer where grupa.smjer=smjer.sifra;



select a.naziv, b.naziv as smjer, d.ime, d.prezime 
from grupa a inner join smjer b on a.smjer=b.sifra
left join predavac c on a.predavac = c.sifra
left join osoba d on c.osoba = d.sifra;


# ispišite sva imena i prezimena polaznika koji su članovi grupa PP24

select a.ime, a.prezime
from osoba a
inner join polaznik b on b.osoba=a.sifra
inner join clan c on c.polaznik =b.sifra 
inner join grupa d on c.grupa=d.sifra
where d.naziv='JP25';

# Upišite sebe u grupu JP25

# grupa = 2
select * from grupa; 

# polaznik = 12
select a.sifra, b.ime, b.prezime
from polaznik a inner join osoba b on a.osoba =b.sifra
where b.prezime like 'J%';

insert into clan (grupa,polaznik) values (2,12);

# Ispišite sve nazive grupa u kojima se nalazite Vi
select d.naziv
from osoba a inner join polaznik b on a.sifra =b.osoba 
inner join clan c on b.sifra=c.polaznik 
inner join grupa d on c.grupa=d.sifra
where a.prezime ='Janić';

# "Udajte" se svi i promjenite si prezime na novo željeno


###### DZ

# BAZAKnjižnica
#izvucite sve nazive knjiga koje su izdali
#ne aktivni izdavači

# izvucite sve autore koji u svojim naslovima 
# knjiga menaju slovo B

# izvucite sve aktivne izdavače koji su izdali knjige u Zagrebu



# sakila baza
# izvucite sve nazive zemalja čiji gradovi nemaju definiranu 
# adresu 