<?php

//kreiraj klasu sa 3 svojstva prema oop principu učahurivanja koja
// opisuje onu domaću životinju sa kojom se poistovječuješ

class Pas
{
    private $dlaka;
    private $ime;
    private $vrsta;

	public function getDlaka(){
		return $this->dlaka;
	}

	public function setDlaka($dlaka){
		$this->dlaka = $dlaka;
	}

	public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}

	public function getVrsta(){
		return $this->vrsta;
	}

	public function setVrsta($vrsta){
		$this->vrsta = $vrsta;
	}
    
}
$pas=new Pas();
$pas->setIme('Linzi');
$pas->setDlaka('zlatna');
$pas->setVrsta('zlatni retrever');

echo $pas->getIme();

