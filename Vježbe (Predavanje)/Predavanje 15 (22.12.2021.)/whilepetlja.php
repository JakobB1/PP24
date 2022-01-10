<?php

// while petlja radi s boolean tipom podatka

$i=0; 
$uvjet = $i<10;

while($uvjet){
    echo $i, '<br />';
    $uvjet = ++$i<10;
}

echo '<hr />';
$i=0;
// jedan od češćih načina
while ($i<10){
    echo $i, '<br />';
    $i++;
}


echo '<hr />';
$i=0;
// jedaan od češćih načina
while ($i<10){
    echo $i++, '<br />';
}

// vrijede ista pravila za continue i break
// ugnjnežđivanje jednnako kao kod for

// beskonačnna petlja

while(true){
    echo 'Osijek';
    break;
}