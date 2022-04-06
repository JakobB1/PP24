<?php

class Publishers
{
    // CRUD

    //R - Read
    public static function read()
    {
        $connection=DB::getInstance();
        $expression = $connection->prepare('

            select * from publishers;
        
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    //C - Create

    //U - Update

    //D - Delete
}