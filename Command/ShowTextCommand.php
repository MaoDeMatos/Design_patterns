<?php

namespace Command;

class ShowTextCommand implements CommandI
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
    $this->receiver->printSomething($this->string);
  }
}
