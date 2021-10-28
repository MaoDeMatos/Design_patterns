<?php

namespace Command;

require_once 'config.php';

ob_start();

// Output formatting
echo '<pre>';

$invoker = new Invoker();
$receiver = new Receiver();

if (isset($_POST['Text'])) {
  $invoker->setOnStart(new ShowTextCommand($receiver, "Say Hi!"));
  $invoker->doSomethingImportant();
}

if (isset($_POST['theme'])) {
  $invoker->setOnStart(new LightCommand($receiver, $_POST['theme']));
  $invoker->doSomethingImportant();
}

echo '</pre>';
?><form method="post">
  <input type="submit" name="Text" value="Text" />

  <input type="submit" name="theme" value="light" />
  
  <input type="submit" name="theme" value="dark" />
</form><?php

$content = ob_get_clean();
