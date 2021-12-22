<?php

// indeksni
// višedimenzionalni indeksni niz

$matrica = [
    [1,2,3],
    [3,2,1],
    [2,1,3]
];

echo '<table>';
for($i=0;$i<count($matrica);$i++){
    echo '<tr>';
    for($j=0;$j<count($matrica[$i]);$j++){
        echo '<td>', $matrica[$i][$j], '</td>';
    }
    echo '</tr>';
}
echo '</table>';

// definirajte matricu 10x10 i svim elementima postavite vrijednost 1
$matrica = [];
for($i=0;$i<10;$i++){
    $unutarnja=[];
    for($j=0;$j<10:$j++){
        $unutarnja[]=1;
    }
    $matrica[]=$unutarnja;
}