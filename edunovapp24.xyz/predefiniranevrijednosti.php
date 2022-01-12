<?php

// čitati
// *link za ucenje*
// *link za ucenje*
// *link za ucenje*

echo __DIR__;
echo '<hr />';

echo 'GET<pre>';
print_r($_GET);
echo '</pre>';


echo 'POST<pre>';
print_r($_POST);
echo '</pre>';

echo 'REQUEST<pre>';
print_r($_REQUEST);
echo '</pre>';

echo 'SERVER<pre>';
print_r($_SERVER);
echo '</pre>';

session_start();
echo 'SESSION<pre>';
print_r($_SESSION);
echo '</pre>';

echo 'COOKIE<pre>';
print_r($_COOKIE);
echo '</pre>';

echo 'FILES<pre>';
print_r($_FILES);
echo '</pre>';

echo 'GLOBALS<pre>';
print_r($GLOBALS);
echo '</pre>';