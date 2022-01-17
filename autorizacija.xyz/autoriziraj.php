<?php

if(!isset($_POST['id'])){
    header('location: index.php');
    exit;
}

// lošiji način
/*
if($_POST['id']==7){
    session_start();
    $_SESSION['autoriziran']=7;
    header('location: privatno.php');
}else{
    header('location: index.php');
    exit;
}
*/

if($_POST['id']!=7){
    header('location: index.php');
    exit;
}


session_start();
$_SESSION['autoriziran']=7;
header('location: privatno.php');