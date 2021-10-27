<?php

namespace Strategy;

class AddNumbers implements StrategyI
{
  public function execute(int $number1, int $number2)
  {
    return $number1 + $number2;
  }
}
