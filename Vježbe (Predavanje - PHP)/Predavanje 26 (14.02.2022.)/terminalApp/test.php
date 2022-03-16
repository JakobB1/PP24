<?php

$s = '1. 340,87 ';
$s = trim($s); 
$s = str_replace(' ','',$s);
$s = str_replace('.','',$s);
$s = str_replace(',','.',$s);

echo $s;