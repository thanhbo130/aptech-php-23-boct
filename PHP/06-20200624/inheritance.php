<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name,$color ='undefined'){
        $this->name = $name;
        $this->color = $color;
        echo "name:".$this->name." color".$this->color."<br>";
    }
    public function __destruct()
    {
        echo $this->name.' destructed <br>';
    }
    public function set_name($name){
        $this->name = $name;
    }
    protected function display(){
        echo "Characteristic: ".$this->name."\t".$this->color;
    }
    final private function is_seed(){
        if ($this->name != 'Banana' ){
            echo "have seed";
        }else{
            echo "have not seed";
        }

    }
}
class Banana extends Fruit{
    public $weight;
    function __construct($name,$color,$weight)
    {   $this->weight = $weight;
        parent::__construct($name,$color);
        echo "Weight: ".$this->weight."<br>";
    }
    public function display(){
        parent::display();
        echo $this->weight."<br>";
    }
    public function is_seed(){
        if ($this->name != 'Banana' ){
            echo "have seed <br>";
        }else{
            echo "have not seed <br>";
        }

    }
}
$banana = new Fruit('Bananayellow','Yellow');
$bananaRed = new Banana("BananaRed",'Red',100);
$bananaRed->display();
$bananaRed->is_seed(); //error