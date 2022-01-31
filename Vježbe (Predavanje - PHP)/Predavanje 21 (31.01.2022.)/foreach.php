<?php

require_once 'KlasaFunkcije.php';

$podaci = [
    [
        'sifra'=>1,
        'naziv'=>'PHP programer',
        'cijena'=>5999.99,
        'certificiran'=>true
    ],
    [
        'sifra'=>2,
        'naziv'=>'Java programer',
        'cijena'=>7999.99,
        'certificiran'=>false
    ]
];

// "provrtite" sve elemente niza s for petljom
for($i=0;$i<count($podaci);$i++){
    KlasaFunkcije::logiranje($podaci[$i]);
}

// sintaksa na indeksnom nizu
foreach($podaci as $p){
    KlasaFunkcije::logiranje($p);
}


foreach($podaci as $asoc){
    //sintaksa na asocijativnom nizu
    foreach($asoc as $kljuc=>$vrijednost){
        echo $vrijednost, '<br />';
    }
}