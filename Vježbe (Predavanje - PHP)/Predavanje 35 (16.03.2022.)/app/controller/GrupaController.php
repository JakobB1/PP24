<?php

class GrupaController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'grupe' . DIRECTORY_SEPARATOR;
    private $poruka;
    private $entitet;

    public function index()
    {
       $this->view->render($this->viewDir . 'index',[
        'entiteti' => Grupa::read()
       ]);
    }   

    public function novi()
    {
        header('location:' . App::config('url').'grupa/promjena/' . 
        Grupa::create([
            'naziv'=>'Nova grupa',
            'smjer'=>Smjer::read()[0]->sifra,
            'predavac'=>null,
            'datumpocetka'=>null]
            )
        );
    }

    public function odustani($sifra)
    {
        if(Grupa::odustajanje($sifra)){
            Grupa::delete($sifra);
        }
        header('location:' . App::config('url').'grupa/index');
       
    }


    public function promjena($sifra)
    {
        $this->entitet = Grupa::readOne($sifra);
        $this->view->render($this->viewDir . 'promjena',[
            'poruka'=>'Promjenite podatke',
            'e'=>$this->entitet,
            'smjerovi'=>Smjer::read(),
            'predavaci'=>Predavac::read()
        ]);
    }


    public function brisanje($sifra)
    {
        Grupa::delete($sifra);
        header('location:' . App::config('url').'grupa/index');
    }
}