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
        echo "Invoker: Does anybody want something done before I begin?\n";
        if ($this->onStart instanceof CommandI) {
            $this->onStart->execute();
        }
    }

}

