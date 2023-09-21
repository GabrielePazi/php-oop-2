<?php

trait Peso
{
  public $weight;

  public function setWeight($_weight)
  {
    if (!isset($_weight)) {
      return $this->weight = $_weight;
    }
    return $this->weight = $_weight . "Kg";
  }

  public function getWeight()
  {
    return $this->weight;
  }
}
