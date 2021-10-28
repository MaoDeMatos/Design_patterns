<?php

namespace common_ressources\Controllers\Routes;

use common_ressources\Controllers\Roles\RouteI;

class Project implements RouteI
{
  public static function render($project) {
    require MAIN_ROOT . $project . '/index.php';
    require COMMON_VIEWS . 'template.php';
  }
}
