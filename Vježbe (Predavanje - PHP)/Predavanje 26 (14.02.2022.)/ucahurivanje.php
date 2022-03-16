<?php

class Osoba
{
    // klasa će sakriti svoja svojstva
    private $ime;
    private $prezime;

    // te ih učiniti dostupnima putem javnih get i set metoda
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

$o = new Osoba();
$o->setIme('Pero');
$o->setPrezime('Mali');

echo $o->getIme();