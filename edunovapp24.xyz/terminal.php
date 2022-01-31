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

// ova datoteka se izvodi iz VSC terminala ili CMD
echo "Moja konzolna aplikacija\n"; // \n je novi red
echo 'V1' . PHP_EOL; 
izbornik();


echo 'Korisnik je unio ' . $unosKorisnika;