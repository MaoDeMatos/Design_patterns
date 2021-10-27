<?php

use Strategy\AddNumbers;
use Strategy\SubstractNumbers;
use Strategy\MultiplyNumbers;
use Strategy\DivideNumbers;
use Strategy\Context;

require 'config.php';

ob_start();

// Output formatting
echo '<pre>';

echo 'Base values : 45, 84' . PHP_EOL . PHP_EOL;

$strategy1 = new AddNumbers();
$strategy2 = new SubstractNumbers();
$strategy3 = new MultiplyNumbers();
$strategy4 = new DivideNumbers();

$context = new Context($strategy1);
$context->doSomeBusinessLogic();

$context->setStrategy($strategy2);
$context->doSomeBusinessLogic();

$context->setStrategy($strategy3);
$context->doSomeBusinessLogic();

$context->setStrategy($strategy4);
$context->doSomeBusinessLogic();

echo '</pre>';

$content = ob_get_clean();
