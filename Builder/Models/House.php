<?php

namespace Builder\Models;

class House
{
  // House properties
  protected string $foundations;
  protected int $walls,
    $doors,
    $windows,
    $rooms,
    $surface,
    $floors;

  //Getters and setters
  public function setFoundations($type)
  {
    $this->foundations = $type;
  }

  public function getFoundations()
  {
    return $this->foundations;
  }

  public function setWalls($num)
  {
    $this->walls = $num;
  }

  public function getWalls()
  {
    return $this->walls;
  }

  public function setDoors($num)
  {
    $this->doors = $num;
  }

  public function getDoors()
  {
    return $this->doors;
  }

  public function setWindows($num)
  {
    $this->windows = $num;
  }

  public function getWindows()
  {
    return $this->windows;
  }

  public function setRooms($num)
  {
    $this->rooms = $num;
  }

  public function getRooms()
  {
    return $this->rooms;
  }

  public function setSurface($num)
  {
    $this->surface = $num;
  }

  public function getSurface()
  {
    return $this->surface;
  }

  public function setFloors($num)
  {
    $this->floors = $num;
  }

  public function getFloors()
  {
    return $this->floors;
  }
}
