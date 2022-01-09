<?php 
// if je obavezni dio
if(isset($_GET['t1'])){
    $t = $_GET['t1'];
}else{ //nije obavezni dio
    $t = 0;
    echo  '<p>Definirajte GET parametar t1</p>';
}


echo $t;

//loša praksa
if($t==='Osijek') // === provjerava po tipu i po vrijednosti
echo 'OK';

$b=4;

echo gettype($t), gettype($b);

$r = $t + $b;

echo $r;

