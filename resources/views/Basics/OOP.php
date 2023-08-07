<?php 

class Car {

    // Propertices 
    public $name;
    private $size;
    protected $color;

    public function __invoke(...$a){
        return $a;
    }

  

}


$obj = new Car();
print_r($obj(4, 5,4,5,6,7,8,4));








?>