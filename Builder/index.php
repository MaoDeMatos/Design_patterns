<?php

use Builder\Controllers\HouseBuilder;

require_once 'config.php';

ob_start();

// Output formatting
echo '<pre>';

$houseBuilder = new HouseBuilder();

$defaultHouse = $houseBuilder->getBuilding();

$customHouse = $houseBuilder->reset()
  ->createWalls(8)
  ->createDoors(2)
  ->createWindows(10)
  ->createSurface(121, 2)
  ->getBuilding();

echo 'Default house :' . PHP_EOL;
print_r($defaultHouse);
echo PHP_EOL;

echo 'Custom house :' . PHP_EOL;
print_r($customHouse);

echo '</pre>';

$content = ob_get_clean();
