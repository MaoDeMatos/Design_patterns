<?php

namespace Command;

class Receiver
{
  public function printSomething($string)
  {
    echo 'I said "' . $string . '" !' . PHP_EOL;
  }

  /**
   * Set color theme
   *
   * @param String MUST be either 'dark' or 'light' or the CSS won't recognize it
   * @return void
   */
  public function setTheme($string)
  {
    $GLOBALS['color_theme'] = $string;
  }
}
