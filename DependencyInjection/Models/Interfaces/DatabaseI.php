<?php

namespace DependencyInjection\Models\Interfaces;

interface DatabaseI
{
  public static function connect(array $settings);
}
