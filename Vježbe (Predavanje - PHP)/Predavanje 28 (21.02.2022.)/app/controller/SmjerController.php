<?php

class SmjerController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'smjerovi' . DIRECTORY_SEPARATOR;
   

    public function index()
    {
        $this->view->render($this->viewDir . 'index');
    }
}