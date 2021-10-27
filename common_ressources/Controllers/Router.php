<?php

namespace common_ressources\Controllers;

use common_ressources\Controllers\Routes\Project;
use common_ressources\Controllers\Roles\Singleton;

/**
 * Base router
 */
class Router implements Singleton
{
  protected static string $req = '';
  protected static Router $instance;
  protected static $projects = [];

  protected function __construct()
  {
  }

  protected static function setReq()
  {
    // Check query existence
    if (!empty($_GET['req']) && $_GET['req']) {
      // Remove trailing slash for the router
      if (substr($_GET['req'], -1) == '/') {
        $_GET['req'] = substr($_GET['req'], 0, -1);
      }
    } else {
      $_GET['req'] = "";
    }
    static::$req = $_GET['req'];
  }

  public static function getReq()
  {
    return static::$req;
  }

  protected static function setProjects()
  {
    $directories = [];

    // Get only the name of the directories (glob returns absolute paths)
    foreach (glob(MAIN_ROOT . '*', GLOB_ONLYDIR) as $key => $value) {
      $directories[$key] = basename($value);
    }

    // Remove common_ressources as it's not a project
    if (($key = array_search("common_ressources", $directories)) !== false) {
      unset($directories[$key]);
    }
    static::$projects = $directories;
  }

  protected static function route()
  {
    static::setProjects();
    static::setReq();
    $route = static::getReq();
    // Route is in the projects array
    if (in_array($route, static::$projects)) {
      Project::render($route);
    } else {
      static::home();
    }
  }

  /**
   * Displays the list of available examples
   */
  protected static function home()
  {
    $page_title = 'Home';

    ob_start();

    // Output formatting
    echo "<pre>";

    // Display the result
    echo '<ul id="projects-list">';
    foreach (static::$projects as $value) {
      echo '<li><a href="/' . $value . '/">' . $value . '</a></li>';
    }
    echo '</ul></pre>';

    $content = ob_get_clean();

    $custom_css = COMMON_CSS . 'home.css';

    require COMMON_VIEWS . 'template.php';
  }

  public static function createInstance()
  {
    if (!isset(static::$instance)) {
      static::$instance = new static();
    }
    static::route();
  }
}
