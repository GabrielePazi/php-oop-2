<?php
require_once __DIR__ . '/Category.php';

class Cane extends Category
{
  protected $name = "Dogs";
  protected $icon = '<i class="fa-solid fa-dog"></i>';

  public function __construct()
  {
  }
}
