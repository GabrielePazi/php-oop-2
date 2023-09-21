<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../../traits/Peso.php';

class Cuccia extends Product
{
  use Peso;

  protected $name;
  protected $category;
  protected $color;

  public function __construct(string $_name, string $_price, Category $_category)
  {
    $this->name = $this->setName($_name);
    $this->price = $this->setPrice($_price);
    $this->category = $this->setCategory($_category);
  }

  public function setColor($_color)
  {
    return $this->color = $_color;
  }

  public function getColor()
  {
    return $this->color;
  }
}
