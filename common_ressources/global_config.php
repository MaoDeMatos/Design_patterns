<?php

require 'autoload.php';

define("MAIN_ROOT", $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
define("MAIN_HOST", "/");

define("COMMON_RESSOURCES", MAIN_ROOT . "common_ressources/");

define("COMMON_PUBLIC", MAIN_HOST . "common_ressources/public/");

define("COMMON_VIEWS", COMMON_RESSOURCES . "Views/");

define("COMMON_CSS", COMMON_PUBLIC . "css/");

