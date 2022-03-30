<?php

class PracticeController
{
    public function example1()
    {
        echo 'Edunova';
    }

    public function example2()
    {
        $sb = rand(2,9);
        $name = 'Edunova';
        $o = new stdClass();
        $o->name='Pero';
        $o->surname='Perić';
        $row=[
            'Osijek', 'Zagreb', 'Donji Miholjac'
        ];

        $view = new View();
        $view->render('parameters',[
            'randomNumber'=>$sb,
            'school'=>$name,
            'guide'=>$o,
            'cities'=>$row
        ]);
    }
}