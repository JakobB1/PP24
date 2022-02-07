<?php


class Program
{

    private $podaci;

    public function __construct()
    {
        $this->podaci=[];
        $this->naslov();
    }

    private function izbornik()
    {
        echo '1. Pregled osoba' . PHP_EOL;
        echo '2. Unos osobe' . PHP_EOL;
        echo '3. Promjena osobe' . PHP_EOL;
        echo '4. Brisanje osobe' . PHP_EOL;
        echo '5. Izlaz iz programa' . PHP_EOL;
        $izbor=0;
        while(true){
            $izbor = Unos::ucitajInt('Odaberi stavku izbornika: ','Nisi unio cijeli broj');
            if($izbor<1 || $izbor>5){
                echo 'Nisi unio mogući izbor' . PHP_EOL;
                continue;
            }
            break;
        }
        switch($izbor){
            case 1:
                $this->pregledOsoba();
                break;
            case 2:
                $this->unosOsobe();
                break;
            case 3:
                $this->promjenaOsobe();
                break;
            case 4:
                $this->brisanjeOsobe();
                break;
            case 5:
                echo 'Hvala na korištenju programa, doviđenja!';
        }
    }

    private function brisanjeOsobe()
    {
        for($i=0;$i<count($this->podaci);$i++){
            echo ($i+1) . '. ' . $this->podaci[$i]->getPrezime() . PHP_EOL;
        }
        $brisem = Unos::ucitajInt('Odaberite redni broj za brisanje: ');
       
        array_splice($this->podaci,$brisem-1,1);
        $this->izbornik();
    }

    private function promjenaOsobe()
    {
        for($i=0;$i<count($this->podaci);$i++){
            echo ($i+1) . '. ' . $this->podaci[$i]->getPrezime() . PHP_EOL;
        }
        $mjenjam = Unos::ucitajInt('Odaberite redni broj za promjenu: ');
        $this->podaci[$mjenjam-1]->setPrezime(Unos::ucitajString('Unesi novo prezime: '));
        // DZ postaviti ostala svojstva

        $this->izbornik();
    }

    private function unosOsobe()
    {
        $o = new Osoba();
        $o->setSifra(Unos::ucitajInt('Unesi šifru osobe: '));
        $o->setIme(Unos::ucitajString('Unesi ime osobe: '));
        $o->setPrezime(Unos::ucitajString('Unesi prezime osobe: '));
        $o->setPlaca(Unos::ucitajFloat('Unesi plaću osobe: '));
        $this->podaci[]=$o;
        $this->izbornik();
    }

    private function pregledOsoba()
    {
        $suma=0;
        foreach($this->podaci as $o){
            $suma+=$o->getPlaca();
            echo $o->getIme() . ' ' . $o->getPrezime() . ': ' . $o->getPlaca() . PHP_EOL;
        }
        if(count($this->podaci)>0){
            echo 'Prosjek plaća: ' . ($suma/count($this->podaci)) . PHP_EOL;
        }
        $this->izbornik();
    }

    private function naslov()
    {
        echo '-------------' . PHP_EOL;
        echo 'Edunova Osobe' . PHP_EOL;
        echo '-------------' . PHP_EOL  . PHP_EOL;
        $this->izbornik();
    }
    
}