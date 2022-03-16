<?php

require_once 'KlasaFunkcije.php';

// abstraktna klasa je ona klasa od koje se ne može napraviti instanca (objekt)
// kreira se kako bi sadržavala zajednička svojstva koja druge pod klase nasljede i koriste
abstract class Osoba
{
        private $ime;
        private $prezime;

        public function getIme(){
            return $this->ime;
        }
    
        public function setIme($ime){
            $this->ime = $ime;
        }
    
        public function getPrezime(){
            return $this->prezime;
        }
    
        public function setPrezime($prezime){
            $this->prezime = $prezime;
        }
}

class Polaznik extends Osoba 
{
    private $brojUgovora;

    public function getBrojUgovora(){
		return $this->brojUgovora;
	}

	public function setBrojUgovora($brojUgovora){
		$this->brojUgovora = $brojUgovora;
	}
}

class Predavac extends Osoba 
{
    private $iban;

    public function getIban(){
		return $this->iban;
	}

	public function setIban($iban){
		$this->iban = $iban;
	}
}

$p = new Polaznik();
$p->setIme('Pero');
$p->setBrojUgovora('12/2022');

//echo $p->BrojUgovora(); Fatal error: Uncaught Error: Call to undefined method Polaznik::BrojUgovora() in D:\PP24\edunovapp24.xyz\nasljedivanje.php:57 Stack trace: #0 {main} thrown in D:\PP24\edunovapp24.xyz\nasljedivanje.php on line 57
KlasaFunkcije::logiranje($p);

//$o = new Osoba(); Fatal error: Uncaught Error: Cannot instantiate abstract class Osoba in D:\PP24\edunovapp24.xyz\nasljedivanje.php:62 Stack trace: #0 {main} thrown in D:\PP24\edunovapp24.xyz\nasljedivanje.php on line 62


// kada ti odgovaraju sva svojstva abstraktne klase 
class OsobaImp extends Osoba 
{

}

$o = new OsobaImp();
$o->setIme('Pero');