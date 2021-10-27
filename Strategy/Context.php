<?php

namespace Strategy;

class Context
{
  
    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the strategy \n";
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "\n";

    }
}