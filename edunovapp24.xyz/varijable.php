<?php

// deklaracija varijable
$var = 'Edunova';

//korištenje varijable
echo $var;

// $_GET je niz
echo '<p>' , $_GET['v1'], '</p>';

//indeksni niz
$iniz = ['Prvi', 'Drugi', 'Treći'];

echo '<p>', $iniz[0], '</p>'; // Ispisuje tekst Prvi

// funkcija print_r
echo '<pre>';
print_r($iniz);
echo '</pre>';

//asocijativni nizovi
$aniz = [
    'kljuc'=>'vrijednost',
    'A1'=>'Osijek',
    'B2'=>'Edunova'
];
echo '<p>', $aniz['A1'], '</p>';

echo '<pre>';
print_r($aniz);
echo '</pre>';

echo '<pre>';
print_r($_GET);
echo '</pre>';