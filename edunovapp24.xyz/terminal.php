<?php 

$podaci=[];

function izbornik()
{
    echo '1. pregled svih osoba' . PHP_EOL;
    echo '2. unos nove osobe' . PHP_EOL;
    echo '3. izlaz iz programa' . PHP_EOL;
    echo 'Izbor: ';
    $terminal = fopen('php://stdin','r');
    $unosKorisnika = fgets($terminal);
    switch($unosKorisnika){
        case 1:
            ispisPostojecih();
            break;
        case 2:
            unosNoveOsobe();
            break;
        case 3:
            break;
    }
}

function ispisPostojecih()
{
    if(count($GLOBALS['podaci'])===0){
        echo 'Nema unesenih osoba' . PHP_EOL;
    }else{
        foreach($GLOBALS['podaci'] as $osoba){
            echo $osoba->ime . ' ' . $osoba->prezime . PHP_EOL;
        }
    }
    
    izbornik();
}

function unosNoveOsobe()
{
    $osoba = new stdClass();
    echo 'Unesi ime: ';
    $terminal = fopen('php://stdin','r');
    $unosKorisnika = fgets($terminal);
    $osoba->ime = str_replace(["\n","\r"], '', $unosKorisnika);
    echo 'Unesi prezime: ';
    $osoba->prezime = str_replace(["\n","\r"], '', fgets($terminal));
    $GLOBALS['podaci'][]=$osoba;
    //print_r($GLOBALS);
    izbornik();
}


// ova datoteka se izvodi iz VSC terminala i CMD
echo "Moja konzolna aplikacija\n"; // \n je novi red
echo 'V1' . PHP_EOL; 
izbornik();
