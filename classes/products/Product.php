<?php
require_once __DIR__ . '/../../traits/Peso.php';
class Product
{
  use Peso;

  protected $name;
  protected $price;
  protected $category;

  public function __construct(string $_name, string $_price, Category $_category)
  {
    $this->name = $this->setName($_name);
    $this->price = $this->setPrice($_price);
    $this->category = $this->setCategory($_category);
  }

  public function setName($_name)
  {
    if (strlen($_name) < 1) {
      throw new Exception("Product's name too short", 1);
    }
    return $this->name = $_name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPrice($_price)
  {
    if (!is_numeric($_price)) {
      throw new Exception("Price of product: '". $this->getName() . "' not valid", 2);
    }
    return $this->price = $_price . "€";
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setCategory($_category)
  {
    return $this->category = $_category;
  }

  public function getCategory()
  {
    return $this->category;
  }
}
