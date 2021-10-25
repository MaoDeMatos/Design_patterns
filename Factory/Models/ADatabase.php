<?php

namespace Factory\Models;

use Factory\Interfaces\DatabaseI;

abstract class ADatabase implements DatabaseI
{
  protected static $db;
  protected static $instance;

  protected function __construct()
  {
  }

  // Create a new singleton
  public static function createInstance($args)
  {
    // If class do not already exists
    if (!isset(static::$instance)) {
      // Create a new instance of this class
      static::$instance = new static();
      static::connect($args);
    }
  }

  public static function setDb($db)
  {
    static::$db = $db;
  }

  public static function getDb()
  {
    return static::$db;
  }

  public static function getInstance()
  {
    return static::$instance;
  }
}
