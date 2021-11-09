<?php

spl_autoload_register('autoload_globals');
spl_autoload_register('autoload_models');

function autoload_globals($className) {
    $globalsPath = "../classes/";
    $extension = ".class.php";
    include_once $globalsPath . $className . $extension;
}

function autoload_models($className) {
    $modelsPath = "../classes/models/";
    $extension = ".class.php";
    include_once $modelsPath . $className . $extension;
}