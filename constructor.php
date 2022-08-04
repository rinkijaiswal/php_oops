<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name,$color) {
    $this->name = $name;
    $this->color = $color;
  }

  function get() {
    return ['name'=>$this->name,'color'=>$this->color];
  }
//   function get_color() {
//     return $this->color;
//   }

}

$apple = new Fruit("Apple", "red");
print_r($apple->get());
?>