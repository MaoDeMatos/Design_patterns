<?php

namespace Builder\Controllers;

interface BuildingBuilderInterface
{
  public function reset();

  public function createFoundations(string $type);

  public function createWalls(int $num);

  public function createDoors(int $num);

  public function createWindows(int $num);

  public function createRooms(int $num);

  public function createSurface(int $num, int $floorsNum);

  public function getBuilding();
}
