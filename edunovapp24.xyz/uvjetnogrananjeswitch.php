<?php

$grad = 'Osijek';

switch($grad){
    case 'Zagreb':
        echo 'Taj je OK';
        break;
    case 'Donji Miholjac':
    case 'Vinkovci':
        echo 'Oni su super';
        break;
    case 'Osijek':
        echo 'Najbolji grad';
        echo ' na svijetu';
        break;
    default:
        echo 'Ne znam';
}