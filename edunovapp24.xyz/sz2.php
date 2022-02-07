<?php

$niz=['1','2','1'];

// funkcija vraca broj stringova u nizu ciji je sadrzaj 1

function metoda($niz)
{
    $brojac=0;

    for($i=0;$i<count($niz);$i++){
        if($niz[$i]==='1'){
            $brojac++;
        }
    }

    return $brojac;
}

echo metoda($niz);