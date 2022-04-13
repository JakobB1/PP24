<?php

class Izdavac
{
    // CRUD

    // C - Create 

    // R - Read
    public static function read()
    {
        $veza = DB::getInstanca();
        $izraz = $veza->prepare('
        
            select i.sifra , i.naziv , i.drzava , i.webstranica, 
            count(ig.sifra) as igre
            from izdavac i left join igra ig
            on i.sifra = ig.izdavac_id 
            group by i.sifra , i.naziv , i.drzava , i.webstranica;
        
        '); 
        $izraz->execute();
        return $izraz->fetchAll();
    }

    // D - Delete
}