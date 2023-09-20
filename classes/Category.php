<?php

class Category
{
  protected $categ_name;

  public function __construct(string $_categ_name)
  {
    $this->categ_name = $this->set_categ_name($_categ_name);
  }

  public function set_categ_name($_categ_name)
  {
    return $this->categ_name = ucfirst($_categ_name);
  }

  public function get_categ_name()
  {
    return $this->categ_name;
  }
}
