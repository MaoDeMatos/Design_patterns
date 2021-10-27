<?php

namespace Observer;

class Observer implements \SplObserver
{
  public function update(\SplSubject $subject)
  {
    if ($subject instanceof Subject) {
      echo $subject->getMessage() . PHP_EOL;
    }
  }
}
