<?php 
// if je obavezni dio
if(isset($_GET['t1'])){
    $t = $_GET['t1'];
}else{ //nije obavezni dio
    $t = 0;
    echo  '<p>Definirajte GET parametar t1</p>';
}


//echo $t;

//loša praksa
if($t==='Osijek') // === provjerava po tipu i po vrijednosti
echo 'OK';

$b=4;



echo $t + $b, '<hr/>'; //zbrajanje
echo $t . $b; // nadoljepljivanje


$x=1; $y=2;

if($x>$y){
    echo '1';
}

if($x==$y){ // == provjerava samo po vrijednosti
    echo '2'; 
}else{
    echo '3';
}

$x=1; $y='1';
if($x==$y){ // ispisati će se broj 4 jer je x i y po vrijednosti jednaako
    echo '4';
}

if($x===$y){ // NEĆE se ispisati broj 5 jer je x i y iako su po vrijednosti jednako, ali nisu po tipu
    echo '5';
}



if($x===1){
    echo '6';
}else if($x===2){
    echo '7';
}else if($x===3){
    echo '8';
}else{
    echo '9';
}


// if naredbe se mogu ugnježđivati

if($x>4){
    if($y<3){
        echo '10';
    }
}


