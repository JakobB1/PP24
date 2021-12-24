<?php

// while petlja radi s boolean tipom podatke

$i=0;
$uvjet = $i<10;

while($uvjet){ // ovo se rjeđe vidi
    echo $i , '<br />';
    $uvjet = ++$i<10;
}

echo '<hr />';
$i=0;
// jedan od češćih načina
while ($i<10){
    echo $i , '<br />';
    $i++;
}


echo '<hr />';
$i=0;
// jedan od češćih načina
while ($i<10){
    echo $i++ , '<br />';
}

// vrijede ista pravila za continue i break
// ugnježđivanje jednako kao kod for

// beskonačna petlja

while(true){
    echo 'Osijek';
    break;
}