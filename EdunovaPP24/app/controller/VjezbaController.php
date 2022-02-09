<?php

class VjezbaController
{
    public function primjer1()
    {
        $view = new View();
        $view->render('primjer1');
    }

    public function primjer2()
    {

        $sb = rand(2,9);
        $ime='Edunova';
        $o = new stdClass();
        $o->ime='Pero';
        $o->prezime='Perić';
        $niz=[
            'Osijek', 'Zagreb', 'Donji Miholjac'
        ];
        shuffle($niz);

        $view = new View();
        $view->render('ispisParametara',[
            'slucajniBroj'=>$sb,
            'skola'=>$ime,
            'voditelj'=>$o,
            'gradovi'=>$niz
        ]);
    }

    public function primjer3()
    {
        $parniBrojevi=[];
        for($i=1;$i<=99;$i++){
            if($i%2===0){
                $parniBrojevi[]=$i;
            }
        }

        $view = new View();
        $view->render('primjer3',[
            'parniBrojevi'=>$parniBrojevi
        ]);
    }

    public function primjer3lose()
    {
        $parniBrojevi='';
        for($i=1;$i<=99;$i++){
            if($i%2===0){
                $parniBrojevi.='<li>'.$i.'</li>';
            }
        }

        $view = new View();
        $view->render('primjer3lose',[
            'parniBrojevi'=>$parniBrojevi
        ]);
    }


}