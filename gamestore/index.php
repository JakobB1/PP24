<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

session_start();

define('BP', __DIR__ . DIRECTORY_SEPARATOR);
define('BP_APP', __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);

//test
//echo BP;

$paths = implode(
    PATH_SEPARATOR,
    [
        BP_APP . 'model',
        BP_APP . 'controller',
        BP_APP . 'core'
    ]
);

//test
//echo $paths;

set_include_path($paths);
