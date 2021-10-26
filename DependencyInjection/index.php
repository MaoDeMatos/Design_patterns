<?php

use DependencyInjection\Models\Todo\TodoItem;

require $_SERVER['DOCUMENT_ROOT'] . '\autoload.php';

$todoItem = new TodoItem();

echo '<pre>';
print_r($todoItem);
