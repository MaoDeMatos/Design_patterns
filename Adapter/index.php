<?php

require_once 'config.php';

ob_start();

// Output formatting
echo '<pre>';

// Content

echo '</pre>';

$content = ob_get_clean();
