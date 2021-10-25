<?php

class Database
{
  public static $db;
  public static $instance;

  // Disallow contructor usage
  protected function __construct()
  {
  }

  // Disallow cloning
  protected function __clone()
  {
  }

  // Disallow serializing
  public function __wakeup()
  {
    throw new \Exception("Cannot unserialize singleton");
  }

  // Create a new singleton
  public static function createInstance()
  {
    // If class do not already exists
    if (!isset(static::$instance)) {
      // Create a new instance of this class
      static::$instance = new static();
    }
    static::setPdo();
  }

  public static function getInstance()
  {
    return static::$instance;
  }

  public static function setPdo()
  {
    $pdo = '';

    static::$db = $pdo;
  }

  public static function getPdo()
  {
    return static::$db;
  }
}
