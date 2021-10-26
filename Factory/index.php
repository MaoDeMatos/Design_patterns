<?php

use Factory\Models\Factory;

require_once '../common_ressources/global_config.php';

echo '<pre>';

$factory = new Factory();

// PDO connection
print_r($factory->connect("postgresql"));
echo PHP_EOL;

// Multiple connections
print_r($factory->connect([
  "mysql",
  "postgresql"
]));
