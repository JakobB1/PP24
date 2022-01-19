<?php

// Jedno ispod drugog 10 puta ispišite Osijek
/*
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
echo 'Osijek<br/>';
*/

// for(od kuda; do kuda; uvećanje/umanjenje)

for($i=0;$i<10;$i++){ //ukoliko se for odnosi samo na prvu liniju nakon for tada ne trebaju {}
    echo 'Osijek<br/>';
}

echo '<hr />';

for($i=0;$i<10; $i++){
    echo $i+1, '<br />';
}

echo '<hr />';

//ispiši svaki parni broj od 3 do 22
for($i=3;$i<22;$i++){
    if($i%2===0){
        echo $i, '<br />';
    }
}
echo '<hr />';
//zbroji prvih 100 brojeva

$suma = 0;
for($i=1;$i<=100;$i++){
    $suma+=$i;
}
echo $suma, '<hr />';

// Ispišite sve brojeve od 100 do 1 jedno pokraj drugog odvojeno zarezom

$preskoci = [2,56,78,23,45];

// preskakanje - nastavak
for($i=0;$i<100;$i++){
    if(in_array($i,$preskoci)){
        continue;
    }

    echo $i,'<br />';
}
echo $suma, '<hr />';

// nasilno prekidanje petlje
for($i=0;$i<100;$i++){
    if($i===3){
        break;
    }
    echo $i,'<br />';
}


// petlje se mogu ugnjezditi
echo '<table>';
for($i=0;$i<10;$i++){
    echo '<tr>';
    for($j=0;$j<10;$j++){
        echo '<td style="text-align: right;">', ($i+1) * ($j+1), '</td>';
    }
    echo '</tr>';
}
echo '</table>';


// beskonačna petlja
for(;;){
    echo 'Osijek';
    break;
}