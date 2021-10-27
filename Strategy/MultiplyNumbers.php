<?php

namespace Strategy;

class MultiplyNumbers implements StrategyI
{
  public function execute(int $number1, int $number2)
  {
    echo 'Operation : "*"' . PHP_EOL;
    echo $number1 * $number2;
  }
}
