<?php

use Singleton\Database;

require_once '../common_ressources/global_config.php';
require_once 'config.php';

// Error when trying to use constructor
// $singleton = new Singleton();

ob_start();

// Output formatting
echo '<pre>';

// New singleton
Database::createInstance();
$database = Database::getInstance();

// One instance
var_dump($database);
echo PHP_EOL . 'Object id : ';
print_r(spl_object_id($database));
echo PHP_EOL . PHP_EOL;

// Another singleton
Database::createInstance();
$database2 = Database::getInstance();

// Same instance
var_dump($database);
echo PHP_EOL . 'Object id : ';
print_r(spl_object_id($database2));
echo PHP_EOL;

$content = ob_get_clean();

require COMMON_VIEWS . 'template.php';
