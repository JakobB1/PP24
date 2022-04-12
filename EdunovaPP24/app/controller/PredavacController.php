<?php

class PredavacController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'predavaci' . DIRECTORY_SEPARATOR;

    private $predavac;
    private $poruka;

    public function __construct()
    {
        parent::__construct();
        $this->predavac = new stdClass();
        $this->predavac->sifra=0;
        $this->predavac->ime='';
        $this->predavac->prezime='';
        $this->predavac->oib='';
        $this->predavac->email='';
        $this->predavac->iban='';
    }


    public function index()
    {
        $predavaci = Predavac::read();
        foreach($predavaci as $p){
            if(file_exists(BP . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR
            . 'predavaci' . DIRECTORY_SEPARATOR . $p->sifra . '.png' )){
                $p->slika= App::config('url') . 'public/img/predavaci/' . $p->sifra . '.png';
            }else{
                $p->slika= App::config('url') . 'public/img/nepoznato.png';
            }
        }
       $this->view->render($this->viewDir . 'index',[
           'predavaci'=>$predavaci
       ]);
    }   

    public function detalji($sifra=0)
    {
        if($sifra===0){
            $this->view->render($this->viewDir . 'detalji',[
                'predavac'=>$this->predavac,
                'poruka'=>'Unesite tražene podatke',
                'akcija'=>'Dodaj novi'
            ]);
        }else{
            $this->view->render($this->viewDir . 'detalji',[
                'predavac'=>Predavac::readOne($sifra),
                'poruka'=>'Promjenite podatke',
                'akcija'=>'Promjena'
            ]);
        }

    }

    public function akcija()
    {
        if($_POST['sifra']==0){
            //prvo kontrole 
            if($this->kontrolaOIB($_POST['oib'])){
                $sifra = Predavac::create($_POST);
            }else{
                $this->view->render($this->viewDir . 'detalji',[
                    'predavac'=>(object)$_POST,
                    'poruka'=>'Neispravan OIB',
                    'akcija'=>'Dodaj novi'
                ]);
                return;
            }
            
        }else{
            //prvo kontrole 
            Predavac::update($_POST);
            $sifra=$_POST['sifra'];
        }

        if(isset($_FILES['slika'])){
            move_uploaded_file($_FILES['slika']['tmp_name'], 
            BP . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR
             . 'predavaci' . DIRECTORY_SEPARATOR . $sifra . '.jpg'
        );
        }

        header('location:' . App::config('url').'predavac/index');
    }


    public function brisanje($sifra)
    {
        Predavac::delete($sifra);
        header('location:' . App::config('url').'predavac/index');
    }



    private function kontrolaOIB($oib) {

        if (strlen($oib) != 11 || !is_numeric($oib)) {
            return false;
        }
    
        $a = 10;
    
        for ($i = 0; $i < 10; $i++) {
    
            $a += (int)$oib[$i];
            $a %= 10;
    
            if ( $a == 0 ) { $a = 10; }
    
            $a *= 2;
            $a %= 11;
    
        }
    
        $kontrolni = 11 - $a;
    
        if ( $kontrolni == 10 ) { $kontrolni = 0; }
    
        return $kontrolni == intval(substr($oib, 10, 1), 10);
    }


    public function trazipredavac($uvjet)
    {
        header('Content-type: application/json');
        echo json_encode(Predavac::traziPredavac($uvjet));
    }



    public function dodajPredavac($ime,$prezime)
    {
        echo Predavac::create([
            'ime'=>$ime,
            'prezime'=>$prezime,
            'oib'=>'',
            'email'=>'',
            'iban'=>''
        ]);
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