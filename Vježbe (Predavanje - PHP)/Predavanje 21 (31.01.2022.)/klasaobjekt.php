<?php


// Klasa je opisnik objekta.

class Osoba
{
    public $ime; // u klasi se navode svojstva
    public $prezime; // ovakav način navođenja svojstavan NIJE DOBAR

    // u klasi se nalaze metode
    public function imePrezime()
    {
        return $this->ime . ' ' . $this->prezime;
    }
}
$niz=[];

// Objekt je pojavnost/instanca klase
$o = new Osoba(); // $o je varijabla. Ispravnije je reći instance variable
$o->ime='Pero';
$o->prezime='Kum';
$niz[]=$o;

echo $o->imePrezime();
echo '<hr />';
$o = new Osoba();
$o->ime='Maja';
$o->prezime='Daz';
$niz[]=$o;

echo $o->imePrezime();
echo '<hr />';

echo '<pre>';
print_r($niz);
echo '</pre>';