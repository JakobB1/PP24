<?php

require_once 'funkcije.php';
require_once 'KlasaFunkcije.php';

// ispisati sve prim brojeve od 20 do 100
for($i=20;$i<100;$i++){
    if(prim($i)){
        nr($i);
    }
}

// https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php
// ::  Paamayim Nekudotayim
KlasaFunkcije::logiranje($_SERVER);

nr('');
echo zbroj(5);