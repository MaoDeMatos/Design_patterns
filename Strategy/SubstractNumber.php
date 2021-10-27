<?php

namespace Strategy;

class SubstractNumbers implements StrategyI
{
  public function execute(int $number1, int $number2)
  {
    return $number1 - $number2;
  }
}
