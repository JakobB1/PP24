<?php

// Program prima jedan broj. Ako je primljeni broj prim (prosti) broj
// one je boja stranica plava, inače je crvena

// Prosti brojevi ili prim-brojevi su svi prirodni brojevi djeljivi
// bez ostatka samo s brojem 1 i sami sa sobom, a veći od broja 1.
// broj 1 po definiciji nije prost broj.

if(isset($_GET['b'])){
    $b=$_GET['b'];
}else{
    echo 'unesi GET parametar b';
    exit;
}

//echo $b;
$prim=true;
for($i=2;$i<$b;$i++){
    if($b % $i===0){
        $prim=false;
        break;
    }
    // echo $b % $i, '<br />'; ispisati  sve prim brojeve između dva primljena broja
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $prim ? 'blue' : 'red' ?>">
    
</body>
</html>