<?php

class NadzornaplocaController extends AutorizacijaController
{
    private $viewDir = 'privatno' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $this->view->render($this->viewDir . 'nadzornaPloca',[
            'css'=>'<link rel="stylesheet" href="' . App::config('url') . 'public/css/nadzornaploca.css">',
            'javascript'=>'<script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <script>
            let podaci=' . json_encode(Grupa::brojPolaznikaNaGrupi(), JSON_NUMERIC_CHECK) . '; 
            </script>
            <script src="' . App::config('url') . 'public/js/nadzornaploca.js"></script>'
        ]);
    }
}