<?php

require_once "Database.php";

// Output formatting
echo '<pre>';

// Error when trying to use constructor
// $singleton = new Singleton();

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
