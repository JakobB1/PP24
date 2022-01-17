<?php

// Program unosi dva broja
// Program ispisuje sve brojeve od 0 do umnoška unesenih brojeva

if(isset($_GET['p1'])){
    $p1 = $_GET['p1'];
}else{
    echo 'Obavezno unos 1. broja kao GET parametar p1';
    exit;
}

if(isset($_GET['p2'])){
    $p2 = $_GET['p2'];
}else{
    echo 'Obavezno unos 2. broja kao GET parametar p2';
    exit;
}

$b=0;
while($b<=$p1*$p2){
    echo $b++ , '<br />';
}
echo '<hr />';
for($i=0;$i<=$p1*$p2;$i++){
    echo $i, '<br />';
}