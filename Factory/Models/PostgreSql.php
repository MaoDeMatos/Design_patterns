<?php

namespace Factory\Models;

class PostgreSql extends ADatabase
{
  protected static $db;
  protected static $instance;

  public static function connect(array $settings)
  {
    // $db = pg_connect(
    //   "host=" . $settings['host']
    //     . " dbname=" . $settings['dbname']
    //     . " user=" . $settings['user']
    //     . " password=" . $settings['pass']
    // );
    $db = 'postgresql';
    static::setDb($db);
  }
}
