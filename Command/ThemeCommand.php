<?php

namespace Command;

class ThemeCommand implements CommandI
{
  protected ThemeReceiver $receiver;
  protected string $string;

  public function __construct(ThemeReceiver $receiver, $string)
  {
    $this->receiver = $receiver;
    $this->string = $string;
  }

  public function execute($string)
  {
    $this->receiver->setTheme($string);
  }
}
