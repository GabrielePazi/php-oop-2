<?php
require_once __DIR__ . '/Product.php';

class Cibo extends Product
{
  protected $name;
  protected $category;
  protected $base_type;

  public function __construct(string $_name, string $_price, Category $_category)
  {
    $this->name = $this->setName($_name);
    $this->price = $this->setPrice($_price);
    $this->category = $this->setCategory($_category);
  }

  public function setName($_name)
  {
    return $this->name = $_name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setCategory($_category)
  {
    return $this->category = $_category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setPrice($_price)
  {
    return $this->price = $_price;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setBase_type($_base_type)
  {
    return $this->base_type = $_base_type;
  }

  public function getBase_type()
  {
    return $this->base_type;
  }
}
