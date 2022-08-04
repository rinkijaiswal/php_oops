<?php

// creating class
class Fruits{
    public $name,$color;

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color(){
        return $this->color;

    }
}

$apple = new Fruits();

$apple->set_name('apple');
$apple->set_color('red');
echo $apple->get_color();

echo $apple->get_name();

?>