<?php

$grad = new stdClass();
$grad->naziv='Osijek';

echo $grad->naziv;

echo '<hr />';

class Podaci
{
    private $podaci;

    public function __construct()
    {
        $this->podaci=[];
    }

    public function __set($naziv,$vrijednost)
    {
        $this->podaci[$naziv]=$vrijednost;
        //echo 'set ' . $naziv . ': ' . $vrijednost . '<br />';
    }
    public function __get($naziv)
    {
        if(isset($this->podaci[$naziv])){
            return $this->podaci[$naziv];
        }else{
            return '';
        }
        //echo 'get ' . $naziv . '<br />';
    }
}

$p = new Podaci(); //poziva se __construct
$p->vrsta='Živo cvijeće'; // poziva se __set
echo $p->vrsta . '<br />'; // poziva se __get

$p->ime='Mario'; // poziva se __set
echo $p->ime; // poziva se __get