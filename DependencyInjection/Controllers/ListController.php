<?php

namespace DependencyInjection\Controllers;

use DependencyInjection\Models\Todo\TodoItem;

class ListController
{
  public $itemsList = [];

  public function getItemsList()
  {
    return $this->itemsList;
  }

/**
 * dependency injection
 *
 * @param TodoItem $item
 * @return void
 */
  public function addItem(TodoItem $item)
  {
    $this->itemsList[] = $item;
  }
}