<?php

namespace DependencyInjection\Models\Todo;

use DateTimeImmutable;


class TodoItem
{

  private  $id;
  private  $name;
  private  $finished;
  private  $createdAt;
  private  $finshedAt;
  private  $completed;


  public function __construct($name, bool $finished = false)
  {

    $this->name = $name;
    $this->createdAt = new DateTimeImmutable();
    $this->finshedAt = new DateTimeImmutable();
    $this->finished = $finished;
  }

  /**
   * Get the value of id
   *
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }
  /**
   * Get the value of finished
   */
  public function getFinished()
  {
    return $this->finished;
  }

  /**
   * Set the value of finished
   *
   * @return  self
   */
  public function setFinished($finished)
  {
    $this->finished = $finished;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of createdAt
   */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  /**
   * Set the value of createdAt
   *
   * @return  self
   */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;

    return $this;
  }

  /**
   * Get the value of completed
   */
  public function getCompleted()
  {
    return $this->completed;
  }

  /**
   * Set the value of completed
   *
   * @return  self
   */
  public function setCompleted($completed)
  {
    $this->completed = $completed;

    return $this;
  }



  /**
   * Get the value of finshedAt
   */
  public function getFinshedAt()
  {
    return $this->finshedAt;
  }

  /**
   * Set the value of finshedAt
   *
   * @return  self
   */
  public function setFinshedAt($finshedAt)
  {
    $this->finshedAt = $finshedAt;

    return $this;
  }
}
