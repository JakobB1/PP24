<?php

// Program prima dva broja i ispisuje sve brojeve jedno ispod drugog
// između 2 primljena broja od manjeg prema većem


// uzmete brojeve
$b1=13;
$b2=3;

if($b1<=$b2){
    $min=$b1;
    $max=$b2;
}else{
    $min=$b2;
    $max=$b1;
}

for($i=$min;$i<=$max;$i++){
    echo $i, '<br />';
}