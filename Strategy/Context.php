<?php

namespace Strategy;


class Context
{
  
    private StrategyI $strategy;

    public function __construct(StrategyI $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyI $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): void
    {

        echo "Context: Sorting data using the strategy \n";
        $result = $this->strategy->execute(45,84);
        echo implode(",", $result) . "\n";

    }
}