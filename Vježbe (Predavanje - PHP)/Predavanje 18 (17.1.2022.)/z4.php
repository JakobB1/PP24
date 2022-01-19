<?php

// Napišite funkciju koja iz primljenog niza 
// ispisuje najmanji broj
// primljeni niz je indeksni niz koji sadrži samo brojeve

// od verzije PHP 8 moguće je za svaki parametar naznačiti kojeg je tipa (array)
// moguće je za funkciju naznačiti kojeg je tipa (:void) - void označava da ne vraća vrijednost
function najmanji(array $niz): void
{
    if(gettype($niz)!=='array'){
        return; //prekida izvođenje funkcije
    }
    if(count($niz)===0){
        return; //prekida izvođenje funkcije
    }
    $najmanji = PHP_INT_MAX;
    for($i=0;$i<count($niz);$i++){
        if($niz[$i]<$najmanji){
            $najmanji=$niz[$i];
        }
    }
    echo $najmanji;
}

najmanji([3,5,6]);

phpinfo();