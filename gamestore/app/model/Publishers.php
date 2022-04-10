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
    public static function create($parameters)
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('
        
            insert into publishers (name,country,website)
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
        
            delete from publishers where id=:id;
        
        '); 
        $expression->execute(['id'=>$id]);

    }
}
