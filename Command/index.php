<?php
namespace Command;
require_once 'config.php';

ob_start();

$invoker = new Invoker();
$receiver = new Receiver();

if(isset($_POST['Texte'])) {
$invoker->setOnStart( new ShowTextCommand($receiver, "Say Hi!"));
$invoker->doSomethingImportant();
}

if(isset($_POST['light'])) {
$invoker->setOnStart( new LightCommand($receiver));
$invoker->doSomethingImportant();
}


// Output formatting
// echo '<pre>';

// echo '</pre>';
?>
  <form method="post">
        <input type="submit" name="Text"
                value="Text"/>
          
        <input type="submit" name="light"
                value="Button2"/>
    </form>

    <?php

$content = ob_get_clean();
