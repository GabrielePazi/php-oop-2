<?php
require_once __DIR__ . '/Product.php';

class Cibo extends Product
{
  protected $name;
  protected $category;
  protected $food_type;

  public function __construct(string $_name, string $_price, Category $_category)
  {
    $this->name = $this->setName($_name);
    $this->price = $this->setPrice($_price);
    $this->category = $this->setCategory($_category);
  }

  public function setfood_type($_food_type)
  {
    return $this->food_type = $_food_type;
  }

  public function getfood_type()
  {
    return $this->food_type;
  }
}
