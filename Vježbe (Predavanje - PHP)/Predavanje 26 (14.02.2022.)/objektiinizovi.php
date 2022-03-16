<?php

require_once 'KlasaFunkcije.php';

class Mobitel
{
    public $naziv;
    public $proizvodac;
}

$m = new Mobitel();
$m->naziv='S12';
$m->proizvodac='Samsung';

KlasaFunkcije::logiranje($m);

$niz = (array)$m; //cast

KlasaFunkcije::logiranje($niz);

$niz = [
    'ime' => 'Marko',
    'prezime' => 'Tolja'
];

KlasaFunkcije::logiranje($niz);

$o = (object) $niz; //cast

KlasaFunkcije::logiranje($o);