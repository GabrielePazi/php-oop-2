<?php

abstract class Category
{
  protected $name;
  protected $icon;

  public function __construct(string $_name, string $_icon)
  {
    $this->name = $this->set_name($_name);
    $this->icon = $this->set_icon($_icon);
  }

  public function set_name($_name)
  {
    return $this->name = $_name;
  }

  public function get_name()
  {
    return $this->name;
  }

  public function set_icon($_icon)
  {
    return $this->icon = $_icon;
  }

  public function get_icon()
  {
    return $this->icon;
  }
}
