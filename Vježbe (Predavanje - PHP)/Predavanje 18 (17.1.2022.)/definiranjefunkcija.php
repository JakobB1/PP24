<?php

// korištenje postojeće funkcije
print_r($_GET);

$niz = [2,3,4];
echo count($niz);

$grad = 'Osijek';
echo substr($grad,2,2);

echo rand();

echo '<hr />';
$t=7;
// 1. ne prima parametre, ne vraća vrijednost
function slucajniBroj()
{
    // notice
    $i=7; // mat.
    echo $t;
    echo rand() + rand();
}
// notice
echo $i; // mat.
slucajniBroj();


function hr()
{
    echo '<hr />';
}


hr();


// 2. prima parametre i ne vraća vrijednost
function detalji($v)
{ // ova funkcija prima 1 parametar
    echo '<pre>';
    print_r($v);
    echo '<pre>';
}


detalji($_SERVER);
$niz = [2,2,2];
detalji($niz);

hr();

function najmanji($i,$j)
{ // prima dva parametra
    if($i<$j){
        echo $i;
    }else if($i===$j){
        echo 'isti su';
    }else{
        echo $j;
    }
}

najmanji(4,7);
hr();
najmanji(5,2);
hr();
najmanji(3,3);
hr();
najmanji(rand(),rand(10000000,99999999));
hr();

//opcionalni parametri
function parniBrojevi($od=2,$do=100)
{
    for($i=$od;$i<$do;$i++){
        echo ($i%2===0 ? $i : ''), '<br />';
    }
}

parniBrojevi();
hr();
parniBrojevi(7,9);
hr();
hr();


// 3. Ne prima parametre, vraća vrijednost (return)
function sb()
{
    return rand() + 1;
}

//$i = sb();
//echo $i;

echo sb();
hr();
// 4. Prima parametre, vraća vrijednost

function zbroji($i,$j)
{
    return $i+$j;
}

echo zbroji(5,5);


$prim=true;
for($i=2;$i<29;$i++){
    if(29%$i===0){
        $prim=true;
        break;
    }
}
if($prim){
    echo 'Broj je PRIM';
}

hr();

function prim($broj)
{
    for($i=2;$i<$broj;$i++){
        if($broj%$i===0){
            return false;
        }
    }
    return true;
}


if(prim(29)){
    echo 'Broj je PRIM';
}

