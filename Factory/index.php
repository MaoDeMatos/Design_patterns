<?php

use Factory\Models\Factory;

require $_SERVER['DOCUMENT_ROOT'] . '\autoload.php';

echo '<pre>';
// print_r(file_exists($_SERVER['DOCUMENT_ROOT'] . '\autoload.php'));

$factory = new Factory();

// PDO connection
print_r($factory->connect("postgresql"));
echo PHP_EOL;

// Multiple connections
print_r($factory->connect([
  "mysql",
  "postgresql"
]));
