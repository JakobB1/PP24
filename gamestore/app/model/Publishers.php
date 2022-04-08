<?php

class Publishers
{
    // CRUD

    //R - Read
    public static function read()
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('

            select a.publisher_id , a.name , a.country , a.website,
            count(b.game_id) as games
            from publishers a left join games b 
            on a.publisher_id = b.game_id 
            group by a.publisher_id , a.name , a.country , a.website;
        
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    //C - Create

    //U - Update

    //D - Delete
}
