<?php
require_once __DIR__ . '/Category.php';

class Product extends Category
{
  protected $name;
  protected $price;
  protected $type;

  public function __construct(string $_name, string $_price, string $_category, string $_type)
  {
    parent::__construct($_category);

    $this->name = $this->set_name($_name);
    $this->price = $this->set_price($_price);
    $this->type = $this->set_type($_type);
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

  public function set_type($_type)
  {
    return $this->type = $_type;
  }

  public function get_type()
  {
    return $this->type;
  }
}
