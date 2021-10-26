<?php

namespace common_ressources\Controllers;

/**
 * Base router
 */
class Router
{
  protected static string $req = '';

  protected function __construct()
  {
  }

  protected static function setReq()
  {
    if (empty($_GET)) {   //
      static::$req = '';    // Remove if server rewriting
      return;             // can be used
    }                     //

    // Check query existence
    if ($_GET['req']) {
      // Remove trailing slash for the router
      if (substr($_GET['req'], -1) == '/') {
        $_GET['req'] = substr($_GET['req'], 0, -1);
      }
    } else {
      $_GET['req'] = '';
    }
    static::$req = $_GET['req'];
  }

  public static function getReq()
  {
    return static::$req;
  }

  public static function route()
  {
    switch (static::$req) {
        // case 'home':
        //   Home::render();
        //   break;

      default:
        // Home::render();
        break;
    }
  }
}
