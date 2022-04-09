<?php

class Publishers
{
    // CRUD

    //R - Read
    public static function read()
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('

            select a.id , a.name , a.country , a.website,
            count(b.id) as games
            from publishers a left join games b 
            on a.id = b.id 
            group by a.id , a.name , a.country , a.website;
        
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    //C - Create

    //U - Update

    //D - Delete
}
