<?php

namespace Factory\Interfaces;

interface DatabaseI
{
  public static function connect(array $settings);
}
