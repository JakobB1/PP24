<?php

class Smjer
{


    public static function readOne($kljuc)
    {
        $veza = DB::getInstanca();
        $izraz = $veza->prepare('
        
            select * from smjer where sifra=:parametar;
        
        '); 
        $izraz->execute(['parametar'=>$kljuc]);
        return $izraz->fetch();
    }

    // CRUD

    //R - Read
    public static function read()
    {
        $veza = DB::getInstanca();
        $izraz = $veza->prepare('
        
            select a.sifra, a.naziv, a.trajanje, a.cijena , a.certificiran,
            count(b.sifra) as grupa
            from smjer a left join grupa b
            on a.sifra =b.smjer 
            group by a.sifra, a.naziv, a.trajanje, a.cijena , a.certificiran
            order by 5 desc, 2;
        
        '); 
        $izraz->execute();
        return $izraz->fetchAll();
    }

    //C - Create
    // $parametri su asocijativni niz - tako mi odgovara
    public static function create($parametri)
    {
        $veza = DB::getInstanca();
        $izraz = $veza->prepare('
        
            insert into smjer (naziv,trajanje,cijena,certificiran)
            values (:naziv,:trajanje,:cijena,:certificiran);
        
        '); 
        $izraz->execute($parametri);
        
    }
    

    //U - Update
    

    //D - Delete
    
}