<?php

class KlasaFunkcije
{
    static function logiranje($v) //static označava da možete koristiti funkciju bez instanciranja objekta
    {
        echo '<pre>';
        print_r($v);
        echo '</pre>';
    }
}