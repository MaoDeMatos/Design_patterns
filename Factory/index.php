<?php

use Factory\Models\Factory;

require_once '../common_ressources/global_config.php';
require_once 'config.php';

ob_start();

// Output formatting
echo '<pre>';

// New factory
$factory = new Factory();

// PDO connection
print_r($factory->connect("postgresql"));
echo PHP_EOL;

// Multiple connections
print_r($factory->connect([
  "mysql",
  "postgresql"
]));

$content = ob_get_clean();

require COMMON_VIEWS . 'template.php';
