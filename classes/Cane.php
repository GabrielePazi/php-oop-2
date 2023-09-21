<?php
require_once __DIR__ . '/Category.php';

class Cane extends Category
{
  protected $name = "Dogs";
  protected $icon = '<i class="fa-solid fa-dog"></i>';

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
