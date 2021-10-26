<?php

namespace Factory\Models;

use Factory\Interfaces\FactoryI;

class Factory implements FactoryI
{
  public function connect(array|string $connections): array|string
  {
    // Get DBs settings
    if ($settings = json_decode(
      file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/settings.json"),
      true
    )) {
      $databases = $settings['databases'];

      // Return an array
      $result = [];

      // If a string is passed
      if (!is_array($connections)) {
        // Use it to create a database connection
        // Full class name with namespace
        $class = "Factory\\Models\\" . $connections;
        // Return directly a db connection
        $class::createInstance(
          $databases[$connections]
        );
        $result[$connections]['db'] = $class::getDb();
        $result[$connections]['_uid'] = spl_object_id($class::getInstance());
      } else // An array is passed
      {
        // Return an array
        // $result = [];
  
        // If the values are present in the settings file
        foreach ($connections as $connection) {
          if (array_key_exists($connection, $databases)) {
            // Full class name with namespace
            $class = "Factory\\Models\\" . $connection;
            // Add the db connection to the array
            $class::createInstance(
              $databases[$connection]
            );
            $result[$connection]['db'] = $class::getDb();
            $result[$connection]['_uid'] = spl_object_id($class::getInstance());
          }
        }
      }
      return $result;
    }
  }
}
