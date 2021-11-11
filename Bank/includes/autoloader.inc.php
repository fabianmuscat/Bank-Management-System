<?php

spl_autoload_register('autoload_globals');
spl_autoload_register('autoload_views');
spl_autoload_register('autoload_controllers');
spl_autoload_register('autoload_global_models');
spl_autoload_register('autoload_users');

function autoload_globals($className) {
    $globalsPath = "../classes/";
    $extension = ".class.php";
    include_once $globalsPath . $className . $extension;
}

function autoload_global_models($className) {
    $modelsPath = "../classes/models/";
    $extension = ".class.php";
    include_once $modelsPath . $className . $extension;
}

function autoload_controllers($className) {
    $modelsPath = "../classes/controllers/";
    $extension = ".class.php";
    include_once $modelsPath . $className . $extension;
}

function autoload_views($className) {
    $modelsPath = "../classes/views/";
    $extension = ".class.php";
    include_once $modelsPath . $className . $extension;
}

function autoload_users($className) {
    $modelsPath = "../classes/models/User/";
    $extension = ".class.php";
    include_once $modelsPath . $className . $extension;
}