<?php

namespace Observer;

class Observer implements \SplObserver
{
  public function update(\SplSubject $subject)
  {
    echo $subject->getMessage();
  }
}
