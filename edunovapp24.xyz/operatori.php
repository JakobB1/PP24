<?php

$x=2; // = je dodjeljivanje vrijednost
$y=1;

// + - * / == === & && | || ! nema potrebe za primjerima


$r = $x + 1; // 3

$r = $r + 1; //4

$r += 1; //5

$r -= $x; // 3

// increment i decrement

$r++; //4

++$r; //5

echo ++$r, '<hr />'; //6

echo $r++, '<hr />'; // ispisuje 6, nakon ispisa vrijednot je 7

echo $r, '<hr />'; //7

echo --$r, '<hr />'; //6

echo $r--, '<hr />'; //6

echo $r, '<hr />'; //5

// karakteristični zadatak na razgovoru za posao programera

$i=1; $j=0;

$i += ++$j - 1; //i=1
$j = $i--; //j=1, i=0
echo $i+$j, '<hr />'; // 1

// modulo % je ostatak nakon cjelobrojnog djeljenja

echo $r % 2, '<hr />';

$b = 17;
if($b%2===0){
    echo 'PARAN';
}else{
    echo 'NEPARAN';
}