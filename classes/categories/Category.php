<?php

class Category
{
  protected $name;
  protected $icon;

  public function __construct(string $_name, string $_icon)
  {
    $this->name = $this->setName($_name);
    $this->icon = $this->setIcon($_icon);
  }

  public function setName($_name)
  {
    return $this->name = $_name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setIcon($_icon)
  {
    return $this->icon = $_icon;
  }

  public function getIcon()
  {
    return $this->icon;
  }
}
