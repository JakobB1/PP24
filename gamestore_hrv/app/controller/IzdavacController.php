<?php

class IzdavacController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'izdavaci' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $this->view->render($this->viewDir . 'index',[
            'izdavaci' => Izdavac::read()
        ]);
    }

    public function brisanje($sifra)
    {
        Izdavac::delete($sifra);
        //$this->index();
        header('location:' . App::config('url').'izdavac/index');
    }
}