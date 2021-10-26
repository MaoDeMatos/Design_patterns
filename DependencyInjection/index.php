<?php

use DependencyInjection\Controllers\ListController;
use DependencyInjection\Models\Todo\TodoItem;

require $_SERVER['DOCUMENT_ROOT'] . '\autoload.php';

$listController = new ListController();
$todoList = $listController->getItemsList();

// Items should come from a file or a db
$itemsFromDb = [
  '0' => new TodoItem('Faire ci'),
  '2' => new TodoItem('Faire ça', true),
  '3' => new TodoItem('Faire ceci'),
  '5' => new TodoItem('Très original, bravo'),
];

ob_start();

// Display informations
foreach ($itemsFromDb as $key => $value) {
  $createdAt = $value->getCreatedAt();
  echo '<li>';
  echo '<span class="one">#' . $key . ' | </span><span class="two"> | ';
  print_r(date('d F Y', $createdAt->getTimestamp()));
  echo ' | </span><span class="three"> | '
    . $value->getName()
    . ' | </span><span class="four">';
  print_r($value->getFinished());
  echo '</span></li>';
}

$content = ob_get_clean();

require 'Views/template.php';
