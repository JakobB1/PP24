<?php

// Napišite program koji uneseni broj uvećava za 10 i ispisuje rezultat

if(isset($_GET['broj1'])){
    $b1=$_GET['broj1'];
}else{
    echo 'Obavezno postavljanje GET parametra broj1 koji je numeričkog tipa';
    exit;
}

if(isset($_GET['broj2'])){
    $b2=$_GET['broj2'];
}else{
    echo 'Obavezno postavljanje GET parametra broj1 koji je numeričkog tipa';
    exit;
}

$rezultat = $b1 + $b2;

echo $rezultat;
// ZAVRŠITI