<?php

use Observer\Observer;
use Observer\Subject;

require 'config.php';

ob_start();

// Output formatting
echo '<pre>';

$subject = new Subject();

$obs1 = new Observer();
$subject->attach($obs1);

$obs2 = new Observer();
$subject->attach($obs2);

$subject->setMessage("This is the new message !");

$subject->notify();

$content = ob_get_clean();
