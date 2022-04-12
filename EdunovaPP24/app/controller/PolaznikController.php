<?php

class PolaznikController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'polaznici' . DIRECTORY_SEPARATOR;

    private $polaznik;
    private $poruka;

    public function __construct()
    {
        parent::__construct();
        $this->polaznik = new stdClass();
        $this->polaznik->sifra=0;
        $this->polaznik->ime='';
        $this->polaznik->prezime='';
        $this->polaznik->oib='';
        $this->polaznik->email='';
        $this->polaznik->brojugovora='';
    }


    public function index()
    {

        if(!isset($_GET['stranica'])){
            $stranica=1;
        }else{
            $stranica=(int)$_GET['stranica'];
        }
        if($stranica==0){
            $stranica=1;
        }

        if(!isset($_GET['uvjet'])){
            $uvjet='';
        }else{
            $uvjet=$_GET['uvjet'];
        }

        $up = Polaznik::ukupnoPolaznika($uvjet);
        $ukupnoStranica = ceil($up / App::config('rps'));
        
        if($stranica>$ukupnoStranica){
            $stranica = $ukupnoStranica;
        }


      

       $this->view->render($this->viewDir . 'index',[
           'polaznici'=>$this->postaviSlike(Polaznik::read($stranica, $uvjet)),
           'uvjet'=>$uvjet,
           'stranica' => $stranica,
           'ukupnoStranica'=>$ukupnoStranica,
           'css'=>'<link rel="stylesheet" href="' . App::config('url') . 'public/css/cropper.css">',
           'javascript'=>'<script src="' . App::config('url') . 'public/js/vendor/cropper.js"></script>
           <script src="' . App::config('url') . 'public/js/indexPolaznik.js"></script>'
       ]);
    }   

    public function detalji($sifra=0)
    {
        if($sifra===0){
            $this->view->render($this->viewDir . 'detalji',[
                'polaznik'=>$this->polaznik,
                'poruka'=>'Unesite tražene podatke',
                'akcija'=>'Dodaj novi'
            ]);
        }else{
            $this->view->render($this->viewDir . 'detalji',[
                'polaznik'=>polaznik::readOne($sifra),
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
                Polaznik::create($_POST);
            }else{
                $this->view->render($this->viewDir . 'detalji',[
                    'polaznik'=>(object)$_POST,
                    'poruka'=>'Neispravan OIB',
                    'akcija'=>'Dodaj novi'
                ]);
                return;
            }
            
        }else{
            //prvo kontrole 
            polaznik::update($_POST);
        }
        header('location:' . App::config('url').'polaznik/index');
    }


    public function brisanje($sifra)
    {
        polaznik::delete($sifra);
        header('location:' . App::config('url').'polaznik/index');
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




    public function trazipolaznik($uvjet,$grupa)
    {
        header('Content-type: application/json');
        echo json_encode($this->postaviSlike(Polaznik::traziPolaznik($uvjet,$grupa)));
    }



    public function spremisliku(){

        $slika = $_POST['slika'];
        $slika=str_replace('data:image/png;base64,','',$slika);
        $slika=str_replace(' ','+',$slika);
        $data=base64_decode($slika);

        file_put_contents(BP . 'public' . DIRECTORY_SEPARATOR
        . 'img' . DIRECTORY_SEPARATOR . 
        'polaznici' . DIRECTORY_SEPARATOR 
        . $_POST['id'] . '.png', $data);

        echo "OK";
    }


    private function postaviSlike($polaznici)
    {
        foreach($polaznici as $p){
            if(file_exists(BP . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR
            . 'polaznici' . DIRECTORY_SEPARATOR . $p->sifra . '.png' )){
                $p->slika= App::config('url') . 'public/img/polaznici/' . $p->sifra . '.png';
            }else{
                $p->slika= App::config('url') . 'public/img/nepoznato.png';
            }
        }
        return $polaznici;
    }




// čitati REST API
// https://restfulapi.net/
// https://mixedanalytics.com/blog/list-actually-free-open-no-auth-needed-apis/?fbclid=IwAR2ecGMdxUCT2P7oKvE9CvAREiHR4RWpq_ODq8Dn_54SMwRsFyAUB7H7rWQ






    public function test($sto){
        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create('hr_HR');
        switch ($sto) {
            case 'dodaj3000':
                for($i=0;$i<3000;$i++){
                    Polaznik::create([
                        'ime'=>$faker->firstName(),
                        'prezime'=>$faker->lastName(),
                        'oib'=>'Pero',
                        'brojugovora'=>'Pero',
                        'email'=>'Pero'
                    ]);
                }
                
                break;
            case 'dodaj':
                Polaznik::create([
                    'ime'=>'Pero',
                    'prezime'=>'Pero',
                    'oib'=>'Pero',
                    'brojugovora'=>'Pero',
                    'email'=>'Pero'
                ]);
                break;
            case 'promjeni':
                Polaznik::update([
                    'ime'=>'Pero1',
                    'prezime'=>'Pero1',
                    'oib'=>'Pero1',
                    'brojugovora'=>'Pero1',
                    'email'=>'Pero1',
                    'sifra'=>3
                ]);
                break;
            case 'obrisi':
                Polaznik::delete(3);
                break;
            case 'index':
                print_r(Polaznik::read());
                break;
            case 'read':
                print_r(polaznik::readOne(1));
                break;
            default:
                # code...
                break;
        }
    }
}