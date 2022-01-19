<?php

$v = 'Osijek';

echo '<p>', gettype($v), '</p>';

$v = 12;

echo '<p>', gettype($v), '</p>';

$v = 12.6;

echo '<p>', gettype($v), '</p>';

$v = true;

echo '<p>', gettype($v), '</p>';

$v = [];

echo '<p>', gettype($v), '</p>';

$v = new stdClass();

echo '<p>', gettype($v), '</p>';