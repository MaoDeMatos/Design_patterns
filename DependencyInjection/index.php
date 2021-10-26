<?php

use DependencyInjection\Controllers\ListController;
use DependencyInjection\Models\Todo\TodoItem;

require_once '../common_ressources/global_config.php';
require_once 'config.php';

$listController = new ListController();
$todoList = $listController->getItemsList();

// Items should come from a file or a db
$itemsFromDb = [
  '0' => new TodoItem('Faire ci'),
  '2' => new TodoItem('Faire ça', true),
  '3' => new TodoItem('Faire ceci'),
  '5' => new TodoItem('Très original, bravo'),
];

// Display informations
ob_start();

?><ul id="todo-list">
  <li class="highlighted">
    <span class="one">Id</span>
    <span class="two">Creation date</span>
    <span class="three">Task</span>
    <span class="four">Done ?</span>
  </li>
<?php

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
echo '</ul>';

$content = ob_get_clean();

$page_title = basename(PROJECT_ROOT);

$custom_css = PROJECT_HOST . 'css/custom_rules.css';

require COMMON_VIEWS . 'template.php';
