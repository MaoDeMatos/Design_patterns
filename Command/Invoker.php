<?php

namespace Command;

class Invoker
{
  
    private $onStart;

    public function setOnStart(CommandI $command): void
    {
        $this->onStart = $command;
    }

    public function doSomethingImportant(): void
    {
        if ($this->onStart instanceof CommandI) {
            $this->onStart->execute();
        }
    }

}

