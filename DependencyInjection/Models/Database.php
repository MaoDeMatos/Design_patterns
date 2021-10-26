<?php

namespace Factory\Models;

use DependencyInjection\Models\Interfaces\DatabaseI;

abstract class Database implements DatabaseI
{
  protected static $db;
  protected static $instance;

  protected function __construct()
  {
  }

  // Create a new singleton
  protected static function createInstance($args)
  {
    // If class do not already exists
    if (!isset(static::$instance)) {
      // Create a new instance of this class
      static::$instance = new static();
      static::connect($args);
    }
  }

  public static function connect(array $settings)
  {
    // $db = new \PDO(
    //   $settings['driver']
    //     . ":host=" . $settings['host']
    //     . ";dbname=" . $settings['dbname'],
    //   $settings['user'],
    //   $settings['pass']
    // );
    $db = 'mysql';
    static::setDb($db);
  }

  public static function setDb($db)
  {
    static::$db = $db;
  }

  public static function getDb()
  {
    return static::$db;
  }

  public static function getInstance($args)
  {
    static::createInstance($args);
    return static::$instance;
  }
}
