<?php

namespace Command\Commands;

use Command\Receivers\Receiver;

class LightCommand implements CommandI
{
  protected Receiver $receiver;
  protected string $string;

  public function __construct(Receiver $receiver, $string)
  {
    $this->receiver = $receiver;
    $this->string = $string;
  }

  public function execute()
  {
    $this->receiver->setTheme($this->string);
  }
}
