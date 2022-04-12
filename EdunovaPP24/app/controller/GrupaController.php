<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class GrupaController extends AutorizacijaController
{

    private $viewDir = 
                'privatno' . DIRECTORY_SEPARATOR . 
                    'grupe' . DIRECTORY_SEPARATOR;
    private $poruka;
    private $entitet;

    public function index()
    {
       $this->view->render($this->viewDir . 'index',[
        'entiteti' => Grupa::read()
       ]);
    }   

    public function novi()
    {
        header('location:' . App::config('url').'grupa/promjena/' . 
        Grupa::create([
            'naziv'=>'Nova grupa',
            'smjer'=>Smjer::read()[0]->sifra,
            'datumpocetka'=>null]
            )
        );
    }

    public function odustani($sifra)
    {
        if(Grupa::odustajanje($sifra)){
            Grupa::delete($sifra);
        }
        header('location:' . App::config('url').'grupa/index');
       
    }


    public function promjena($sifra)
    {
        
        $this->entitet = Grupa::readOne($sifra);
        if($this->entitet->predavac!=null){
            $p = Predavac::readOne($this->entitet->predavac);
            $labelaPredavaca = $p->ime . ' ' . $p->prezime;
        }else{
            $labelaPredavaca='Nije odabrano';        }
        $this->view->render($this->viewDir . 'promjena',[
            'poruka'=>'Promjenite podatke',
            'e'=>$this->entitet,
            'labelaPredavaca' => $labelaPredavaca,
            'smjerovi'=>Smjer::read(),
            'css'=>'<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">',
            'javascript'=>'<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
            <script>let grupa=' . $this->entitet->sifra . ';</script>
            <script src="' . App::config('url') . 'public/js/detaljiGrupe.js"></script>'
        ]);
    }

    public function promjeni()
    {
        //ovdje bi došle kontrole
        Grupa::update($_POST);
        header('location:' . App::config('url').'grupa/index');
    }


    public function brisanje($sifra)
    {
        Grupa::delete($sifra);
        header('location:' . App::config('url').'grupa/index');
    }

    public function dodajpolaznik($grupa,$polaznik)
    {
        echo Grupa::dodajPolaznik([
            'grupa'=>$grupa,
            'polaznik'=>$polaznik
        ]) ? 'OK' : 'Greška';
    }

    public function brisipolaznik($grupa,$polaznik)
    {
        echo Grupa::brisiPolaznik([
            'grupa'=>$grupa,
            'polaznik'=>$polaznik
        ]) ? 'OK' : 'Greška';
    }

    public function pdf($sifra)
    {
        $grupa = Grupa::readOne($sifra);


        $mpdf = new \Mpdf\Mpdf( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 0,
            'margin_bottom' => 0,
            'margin_header' => 0,
            'margin_footer' => 0
        ]);
        
        
        $html = '<html><div style="margin: 50px;"><h1>' . $grupa->naziv . '</h1>
        <ol>
        ';
        foreach($grupa->polaznici as $p){
            $html.='<li>' . $p->ime . ' ' . $p->prezime . '</li>';
        }
        $html.='
        </ol>
        </div></html>';
        
        $mpdf->WriteHTML($html);
        
        $mpdf->Output($grupa->naziv . '.pdf', 'I');
    }

    public function excel($sifra)
    {
        $grupa = Grupa::readOne($sifra);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // (C) SET CELL VALUE
        $sheet->setCellValue('A1', 'Ime');
        $sheet->setCellValue('B1', 'Prezime');
        $sheet->setCellValue('C1', 'Iznos');
        $brojac=2;
        $suma=0;
        foreach($grupa->polaznici as $p){
            $iznos=rand(2000,3000);
            $sheet->setCellValue('A' . $brojac, $p->ime);
            $sheet->setCellValue('B' . $brojac, $p->prezime);
            $sheet->setCellValue('C' . $brojac, $iznos);
            $suma+=$iznos;
            $brojac++;
        }
        $sheet->setCellValue('C' . $brojac, '=sum(C2:C' . ($brojac-1) . ')');
        
        // loše
        $sheet->setCellValue('C' . ($brojac+1), $suma);

        // (D) SAVE TO FILE
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($grupa->naziv).'.xlsx"');
        $writer->save('php://output');


    }

    public function saljiemail($sifra)
    {
        $this->entitet = Grupa::readOne($sifra);
        $this->view->render($this->viewDir . 'email',[
            'e'=>$this->entitet,
            
            'css'=>'<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">',
            'javascript'=>'<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
            <script src="' . App::config('url') . 'public/js/slanjeEmail.js"></script>'
        ]);

    }

    public function posaljiemail()
    {

        $this->entitet = Grupa::readOne($_POST['sifra']);
        if($_POST['vrsta']==='mail'){
            $this->saljiPutemMail($this->entitet);
        }else{
            $this->saljiPutemGmail($this->entitet);
        }
       
       
    header('location:' . App::config('url').'grupa/promjena/' . $this->entitet->sifra);
    }

    private function saljiPutemMail($grupa)
    {
        foreach($this->entitet->polaznici as $p){
            $to = $p->email;
            $subject = $_POST['naslov'];
            $from = 'Edunova Predavač<cesar@predavac01.edunova.hr>';
            
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            
            // Create email headers
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= $_POST['poruka'];
            $message .= '</body></html>';
            
            // Sending email
            mail($to, $subject, $message, $headers);

        }
    }

    private function saljiPutemGmail($grupa)
    {
        foreach($this->entitet->polaznici as $p){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = "smtp";
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "edunovapp24@gmail.com";
            $mail->Password   = "Edunova-24//";
            $mail->IsHTML(true);
            $mail->AddAddress($p->email, $p->ime . ' ' . $p->prezime);
            $mail->SetFrom("edunovapp24@gmail.com", "Edunova Škola");
            $mail->Subject = $_POST['naslov'];
            $mail->MsgHTML($_POST['poruka']); 
            $mail->Send();
        }
       
    }
}