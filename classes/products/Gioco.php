<?php
require_once __DIR__ . '/Product.php';

class Gioco extends Product
{
  protected $name;
  protected $category;
  protected $type;

  public function __construct(string $_name, string $_price, Category $_category)
  {
    $this->name = $this->setName($_name);
    $this->price = $this->setPrice($_price);
    $this->category = $this->setCategory($_category);
  }

  public function setType($_type)
  {
    return $this->type = $_type;
  }

  public function getType()
  {
    return $this->type;
  }
}
