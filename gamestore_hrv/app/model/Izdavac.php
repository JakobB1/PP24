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
        
            select * from izdavac
        
        '); 
        $izraz->execute();
        return $izraz->fetchAll();
    }

    // D - Delete
}