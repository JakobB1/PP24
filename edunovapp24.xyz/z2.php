<?php

// Program prima jedan broj i ispisuje sve parne brojeve
// od primljenog broja do broja 2 jedno pokraj drugog odvojeno zarezom

$b=123;

for($i=$b;$i>2;$i--){
    if($i%2===0){
    echo $i, ',';
    }
}
echo '2';