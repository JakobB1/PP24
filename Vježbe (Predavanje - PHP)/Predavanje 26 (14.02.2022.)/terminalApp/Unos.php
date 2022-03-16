<?php

class Unos
{
    public static function ucitajInt(
        $poruka='Učitaj cijeli broj: ',
        $porukaGreska='Nisi upisao cijeli broj.')
    {
        $terminal = fopen('php://stdin','r');
        while(true){
            echo $poruka;
            $unosKorisnika = (int)fgets($terminal);
            if($unosKorisnika!=0){
                return $unosKorisnika;
            }
            echo $porukaGreska . PHP_EOL;
        }
    }

    // dozvoljava unos samo s . (točka) kao odjelnik decimalnog dijela
    // DZ napraviti da i unos s , (zarez) bude dozvoljen
    // DZ mora broj 1.672,98 unijeti kao EN s točkom zapit 1672.98
    public static function ucitajFloat(
        $poruka='Učitaj decimalni broj: ',
        $porukaGreska='Nisi upisao decimalni broj.')
    {
        $terminal = fopen('php://stdin','r');
        while(true){
            echo $poruka;
            $unosKorisnika = (float)fgets($terminal);
            if($unosKorisnika!=0){
                return $unosKorisnika;
            }
            echo $porukaGreska . PHP_EOL;
        }
    }


    public static function ucitajString(
        $poruka='Učitaj tekst: ',
        $porukaGreska='Nisi upisao tekst.')
    {
        $terminal = fopen('php://stdin','r');
        while(true){
            echo $poruka;
            $unosKorisnika =fgets($terminal);
            // Čistimo oznaku novog reda https://www.quora.com/What-is-the-difference-between-r-and-n
            $unosKorisnika = preg_replace("/\r|\n/", "", $unosKorisnika);
            if(strlen($unosKorisnika)>0){
                return $unosKorisnika;
            }
            echo $porukaGreska . PHP_EOL;
        }
    }
}