<?php
require_once __DIR__ . '/Category.php';

abstract class Product
{
  protected $name;
  protected $price;
  protected $category;

  public function __construct(string $_name, string $_price, Category $_category)
  {
    $this->name = $this->set_name($_name);
    $this->price = $this->set_price($_price);
    $this->category = $this->setCategory($_category);
  }

  public function set_name($_name)
  {
    return $this->name = $_name;
  }

  public function get_name()
  {
    return $this->name;
  }

  public function set_price($_price)
  {
    return $this->price = $_price;
  }

  public function get_price()
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
