<?php

namespace Command;

class EchoCommand implements CommandI
{
  protected EchoReceiver $receiver;
  protected string $string;

  public function __construct(EchoReceiver $receiver, $string)
  {
    $this->receiver = $receiver;
    $this->string = $string;
  }

  public function execute($string)
  {
    $this->receiver->printSomething($string);
  }
}
