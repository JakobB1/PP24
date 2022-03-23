<?php

class PredavacController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'predavaci' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $this->view->render($this->viewDir . 'index');
    }

    public function test($sto){
        switch ($sto) {
            case 'dodaj':
                Predavac::create([
                    'ime'=>'Pero',
                    'prezime'=>'Pero',
                    'oib'=>'Pero',
                    'iban'=>'Pero',
                    'email'=>'Pero'
                ]);
                break;
            case 'promjeni':
                Predavac::update([
                    'ime'=>'Pero1',
                    'prezime'=>'Pero1',
                    'oib'=>'Pero1',
                    'iban'=>'Pero1',
                    'email'=>'Pero1',
                    'sifra'=>3
                ]);
                break;
            case 'obrisi':
                Predavac::delete(3);
                break;
            case 'index':
                print_r(Predavac::read());
                break;
            case 'read':
                print_r(Predavac::readOne(1));
                break;
            default:
                # code...
                break;
        }
    }
}