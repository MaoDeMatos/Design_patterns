<?php

namespace Factory\Models;

class MySql extends ADatabase
{
  protected static $db;
  protected static $instance;

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
}
