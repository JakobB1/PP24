<?php

$i=3;

while($i<2){
    echo 'Osijek';
}

// for, while i foreach se nužno ne moraju niti jedno izvesti



for($i=16;$i<=20;$i++){
    echo 'Đakovo';
}

// do while osigurava minimalno jedan ulazak u petlju
do{
    echo 'Zagreb'
;}while($i<3);

// while provjerava uvjet na početku a do while na kraju petlje

// beskonačna do while
do{
    break;
}while(true);


$i='pero';

$b=0;

do{
    echo 'TT<br />';
    if($b++>10){
        break;
    }
}while($i);