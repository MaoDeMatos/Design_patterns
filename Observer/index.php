<?php

require 'config.php';

ob_start();

// Output formatting
echo '<pre>';

$subject = new Subject();

$content = ob_get_clean();
