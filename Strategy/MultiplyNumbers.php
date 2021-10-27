<?php

namespace Strategy;

class MultiplyNumbers implements StrategyI
{
  public function execute(int $number1, int $number2)
  {
    return $number1 * $number2;
  }
}
