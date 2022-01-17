<?php
// if je obavezni dio
if(isset($_GET['t1'])){
    $t = $_GET['t1'];
}else{ //nije obavezni dio
    $t = 0;
    echo '<p>Definirajte GET parametar t1</p>';
}


//echo $t;

//loša praksa - nema {}
if($t==='Osijek') // === provjerava po tipu i po vrijednosti
echo 'OK';

$b=4;



echo $t + $b, '<hr />'; //zbrajanje
echo $t . $b; // nadoljepljivanje


$x=1; $y=2;

if($x>$y){
    echo '1<hr />';
}

if($x==$y){ // == provjeravi samo po vrijednosti
    echo '2<hr />';
}else{
    echo '3<hr />';
}

$x=1; $y='1';
if($x==$y){ // ispisati će se broj 4 jer je x i y po vrijednosti jednako
    echo '4<hr />';
}

if($x===$y){ // NEĆE se ispisati broj 5 jer je x i y iako su po vrijednosti jednako, nisu po tipu
    echo '5<hr />';
}



if($x===1){
    echo '6<hr />';
}else if($x===2){
    echo '7<hr />';
}else if($x===3){
    echo '8<hr />';
}else{
    echo '9<hr />';
}


// if naredbe se mogu ugnježđivati

if($x>4){
    if($y<3){
        echo '10<hr />';
    }
}

//gornje napisani izraz može iči
// AND
if($x>4 & $y<3){ // & uvjek provjerava oba uvjeta
    echo '11<hr />';
}

if($x>4 && $y<3){ // && ako prvi uvjet nije zadovoljen, neće se provjeravati drugi
    echo '12<hr />';
}

//OR
if($x>4 | $y<3){ // | uvjek provjerava oba uvjeta
    echo '13<hr />';
}

if($x>4 || $y<3){ // || ako je prvi uvjet zadovoljen, neće se provjeravati drugi
    echo '14<hr />';
}

// NOT

if($x>4 & $y<3){ // & uvjek provjerava oba uvjeta
    echo '15<hr />';
}

if(!($x>4 && $y<3)){ 
    echo '16<hr />';
}

// od korisnika želim uzeti vrijednot za varijablu t a ako je ne postavi ja definiram 0

if(isset($_GET['t'])){
    $t=$_GET['t'];
}else{
    $t=0;
}

//inline if

$t = isset($_GET['t']) ? $_GET['t'] : 0;