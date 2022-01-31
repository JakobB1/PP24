<?php

function prim($broj)
{
    for($i=2;$i<$broj;$i++){
        if($broj%$i===0){
            return false;
        }
    }
    return true;
}

function nr($v)
{
    echo $v, '<br />';
}

// rekurzija
// funkcija zove samu sebe
function zbroj($broj)
{
    // svaka rekurzija mora imati uvjet izlaska rekurzije
    if($broj===1){
        return 1;
    }
    // i naravno poziv samoga sebe
    return $broj + zbroj($broj-1);
}