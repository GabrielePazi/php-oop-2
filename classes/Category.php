<?php

class Category
{
  protected $categ_name;
  protected $icon;

  public function __construct(string $_categ_name, string $_icon)
  {
    $this->categ_name = $this->set_categ_name($_categ_name);
    $this->icon = $this->set_categ_icon($_icon);
  }

  public function set_categ_name($_categ_name)
  {
    return $this->categ_name = $_categ_name;
  }

  public function get_categ_name()
  {
    return $this->categ_name;
  }

  public function set_categ_icon($_categ_icon)
  {
    return $this->icon = $_categ_icon;
  }

  public function get_categ_icon()
  {
    return $this->icon;
  }
}
