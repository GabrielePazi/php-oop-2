<?php
require_once __DIR__ . '/Category.php';

class Gatto extends Category
{
  protected $name = "Cats";
  protected $icon = '<i class="fa-solid fa-cat"></i>';

  public function __construct()
  {
  }

  public function getName()
  {
    return $this->name;
  }

  public function getIcon()
  {
    return $this->icon;
  }
}
