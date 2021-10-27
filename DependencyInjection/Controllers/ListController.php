<?php

namespace DependencyInjection\Controllers;

class ListController
{
  public $itemsList = [];

  public function getItemsList(): array
  {
    return $this->itemsList;
  }

  /**
   * dependency injection
   *
   * @param array $item Contains todoItem object
   * @return void
   */
  public function addItems(array $items)
  {
    foreach ($items as $item) {
      $this->itemsList[] = $item;
    }
  }

  public function removeItem(int $itemId)
  {
    $this->itemsList[] = $itemId;
  }
}
