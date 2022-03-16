<?php

// ispisati svaki broj od 1 do 100 čiji zbroj znamenaka
// je jednako 4

for($i=0;$i<=100;$i++){
    $desetica=(int)($i/10);
    $jedinica=$i%10;
    //echo $desetica . ' ' . $jedinica . '<br />';
    if(($desetica + $jedinica)===7){
        echo $i, '<br />';
    }
}