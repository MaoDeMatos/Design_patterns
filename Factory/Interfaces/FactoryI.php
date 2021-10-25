<?php

namespace Factory\Interfaces;

use Factory\Models\ADatabase;

interface FactoryI
{
  public function connect(array|string $connections): mixed;
}
