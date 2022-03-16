<?php

class Osoba
{
    private $ime;
    private $prezime;

    // konstruktor, u PHP to je magična metoda *link za učenje*
    public function __construct($ime='Pero')
    {
        $this->ime=$ime;
        $this->prezime='Mali';
    }

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

$o = new Osoba('Maja'); // ključna riječ new je poziv metode __construct
//$o->setIme('Drugo');
echo $o->getIme();

