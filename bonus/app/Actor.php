<?php
class Actor { 
  public $name;
  public $last_name;

  public function __construct($name, $lastName) {
    $this->name = $name;
    $this->last_name = $lastName;
  }
}