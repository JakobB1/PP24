<?php

class RazvijacController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'razvijaci' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $this->view->render($this->viewDir . 'index',[
            'razvijaci' => Razvijac::read()
        ]);
    }

    public function brisanje($sifra)
    {
        Razvijac::delete($sifra);
        //$this->index();
        header('location:' . App::config('url').'razvijac/index');
    }
}