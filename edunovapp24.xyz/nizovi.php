<?php

// indeksni jednodimenzionalni niz
$iniz = [12,2,3,'Osijek', 9.23, false]; //$iniz[2] ispisuje 3

for($i=0;$i<count($iniz);$i++){
    if(gettype($iniz[$i])==='boolean'){
        echo $iniz[$i] ? 'true' : 'false', '<br />';
        continue;
    }

    echo $iniz[$i], '<br />'; 
    
}

echo '</hr>';

// višedimenzionalni indeksni niz

$matrica = [
    [1,2,3],
    [3,5,1],
    [2,1,3]
];

echo '<table>';
for($i=0;$i<count($matrica);$i++){
    echo '<tr>';
    for($j=0;$j<count($matrica[$i]);$j++){
        echo '<td>', $matrica[$i][$j] , '</td>';    
    }
    echo '</tr>';
}
echo '</table>';

// definirajte matricu 20x100 i svim elementima postavite vrijednost 0
$matrica=[];
for($i=0;$i<20;$i++){
    $unutarnja=[];
    for($j=0;$j<100;$j++){
        $unutarnja[]=0;
    }
    $matrica[]=$unutarnja;
}
echo '<table>';
for($i=0;$i<count($matrica);$i++){
    echo '<tr>';
    for($j=0;$j<count($matrica[$i]);$j++){
        echo '<td>', $matrica[$i][$j] , '</td>';    
    }
    echo '</tr>';
}
echo '</table>';