<?php
 class Fruit
 {
    public $color;

    public function __construct($color = 'undefined'){
        $this->color = $color; 
    }
    public function __destruct(){
        echo '<br>object with name: '.'\''.$this->color.'\''.' has been destruct!';
    }
    public function get_color(){
        return $this->color;
    }
    public function set_color($color){
        return $this->color = $color;
    }
    public function display(){
        echo 'Object name:'.$this->color.'<br>';
    }
 }
 $Banana = new Fruit();
 $Banana->display();
$Banana->set_color('Yellow');
$Banana->display();

