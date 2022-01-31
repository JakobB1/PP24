<?php

// data source name
$dsn = 'mysql:host=127.0.0.1;dbname=edunovapp24;charset=utf8';

//https://www.php.net/manual/en/pdo.construct.php
$pdo = new PDO($dsn,'edunova','edunova');

$izraz = $pdo->prepare('select * from osoba;');
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

echo '<pre>';
print_r($rezultati);
echo '</pre>';

foreach($rezultati as $red){
    echo $red->prezime . '<br />';
    $red->grad='Osijek';
}

echo '<pre>';
print_r($rezultati);
echo '</pre>';