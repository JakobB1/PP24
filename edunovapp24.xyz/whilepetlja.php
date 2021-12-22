<?php

// while petlja radi s boolean tipom podatka

$i=0;
$uvjet = $i<10;

while($uvjet){ // ovo se rjeđe vidi
    echo $i, '<br />';
    $uvjet = ++$i<10;
}

echo '<hr />'
//jedan od češćih načina
while($i<10){
    echo $i, '<br />';
    $i++;
}