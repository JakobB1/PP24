<?php

class SmjerController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'smjerovi' . DIRECTORY_SEPARATOR;
   

    public function index()
    {
        // print_r(Smjer::read());
        $this->view->render($this->viewDir . 'index',[
            'smjerovi' => Smjer::read()
        ]);
    }
}