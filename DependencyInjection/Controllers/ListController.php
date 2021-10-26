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

  public function addItem(TodoItem $item)
  {
    $this->itemsList[] = $item;
  }
  
  public function removeItem(int $itemId)
  {
    $this->itemsList[] = $itemId;
  }
}
