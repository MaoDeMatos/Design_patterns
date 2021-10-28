<?php

namespace Builder\Controllers;

use Builder\Models\House;

class HouseBuilder implements BuildingBuilderInterface
{
  protected House $house;

  public function __construct()
  {
    $this->reset();
  }

  public function reset()
  {
    $this->house = new House();
    $this->createFoundations()
      ->createWalls()
      ->createDoors()
      ->createWindows()
      ->createRooms()
      ->createSurface();

    return $this;
  }

  public function createFoundations(string $type = 'concrete')
  {
    $this->house->setFoundations($type);

    return $this;
  }

  public function createWalls(int $num = 4)
  {
    $this->house->setWalls($num);

    return $this;
  }

  public function createDoors(int $num = 1)
  {
    $this->house->setDoors($num);

    return $this;
  }

  public function createWindows(int $num = 0)
  {
    $this->house->setWindows($num);

    return $this;
  }

  public function createRooms(int $num = 1)
  {
    $this->house->setRooms($num);

    return $this;
  }

  public function createSurface(int $num = 1, int $floorsNum = 0)
  {
    $this->house->setSurface($num);
    $this->house->setFloors($floorsNum);

    return $this;
  }

  public function getBuilding()
  {
    return $this->house;
  }
}
