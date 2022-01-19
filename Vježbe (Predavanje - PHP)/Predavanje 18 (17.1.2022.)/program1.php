<?php

// Napišite program koji za unesena dva broja ispisuje njihov zbroj

if(isset($_GET['broj1'])){
    $b1=$_GET['broj1'];
}else{
    echo 'Obavezno postavljanje GET parametra broj1 koji je numeričkog tipa';
    exit;
}

if(isset($_GET['broj2'])){
    $b2=$_GET['broj2'];
}else{
    echo 'Obavezno postavljanje GET parametra broj2 koji je numeričkog tipa';
    exit;
}

$rezultat = $b1 + $b2;

echo $rezultat;