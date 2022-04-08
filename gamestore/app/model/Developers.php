<?php

class Developers
{
    // CRUD

    //R - Read
    public static function read()
    {
        $connection = DB::getInstance();
        $expression = $connection->prepare('

            select a.developer_id , a.name , a.country , a.website,
            count(b.game_id) as games
            from developers a left join games b 
            on a.developer_id  = b.game_id 
            group by a.developer_id  , a.name , a.country , a.website;
        
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    //C - Create

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
