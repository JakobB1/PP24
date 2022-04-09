<?php

class Developers
{
    // CRUD

    //R - Read
    public static function read()
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('

            select a.id , a.name , a.country , a.website,
            count(b.id) as games
            from developers a left join games b 
            on a.id  = b.id 
            group by a.id  , a.name , a.country , a.website;
        
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    //C - Create
    public static function create($parameters)
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('
        
            insert into developers (name,country,website)
            values (:name,:country,:website);
        
        '); 
        $expression->execute($parameters);
        
    }

    //U - Update

    //D - Delete
    public static function delete($id)
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('
        
            delete from developers where id=:id;
        
        '); 
        $expression->execute(['id'=>$id]);

    }
}
