<?php

use DependencyInjection\Controllers\ListController;
use DependencyInjection\Models\Todo\TodoItem;

require $_SERVER['DOCUMENT_ROOT'] . '\autoload.php';

$listController = new ListController();
$todoList = $listController->getItemsList();

$itemsFromDb = [
  "0" => new TodoItem("Faire ci"),
  "2" => new TodoItem("Faire ça"),
  "3" => new TodoItem("Faire ceci"),
  "5" => new TodoItem("Très original, bravo"),
];

ob_start();

echo '<pre>';

foreach ($itemsFromDb as $key => $value) {
  echo "<li>#"
  . $key
  . " | "
  . $value->getCreatedAt()
  . " | "
  . $value->getName()
  . " | "
  . $value->getFinished()
  . "</li>";
}

print_r($todoList);

$content = ob_get_clean();

require "Views/template.php";
