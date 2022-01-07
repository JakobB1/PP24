<?php

// deklaracija varijable
$var = 'Edunova';

//korištenje varijable
echo $var;

// $ GET je niz
echo '<p>' , $_GET['v1'], '</p>';

//indeksni niz
$iniz = ['Prvi', 'Drugi', 'Treći'];

echo '<p>', $iniz[0], '</p>'; // Ispisuje tekst Prvi

// funkcija print_r
echo '<pre>';
print_r($iniz);
echo '</pre>';