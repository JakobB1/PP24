<?php

class Smjer
{
    // CRUD

    //R - Read
    public static function read()
    {
        $veza=DB::getInstanca();
        $izraz = $veza->prepare('

           select * from smjer

        ');
        $izraz->execute();
        return $izraz->fetchAll();
    }

    //C - Create 

    //U - Update

    //D - Delete
}