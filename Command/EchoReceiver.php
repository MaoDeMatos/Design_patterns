<?php

namespace Command;

class EchoReceiver
{
  public function printSomething($string)
  {
    echo "J'ai dit " . $string . " !" . PHP_EOL;
  }
}
