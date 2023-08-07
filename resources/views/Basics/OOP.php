<?php 

class Car {

    // Propertices 
    public $name;
    private $size;
    protected $color;


    // Methods -->
      protected function addSize($size){
        return $size *2;
    }

    public function setSize($givenSize){
        return $this->size = $givenSize;
    }
    public function getSize(){
        return $this->addSize($this->size);
    }

    public function setName($name){
        return $this->name = $name;
    }
    public function getName(){
        return strtoupper($this->name);
    }

    public function setColor($color){
        return $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }


   public function printAll(){
    echo "Car Name: ", $this->getName(), "\nCar Color: ", $this->getColor(), "\nCar Size: ", $this->getSize();
   }

  

}

// object declearation -->

$obj = new Car();
$obj->setName("Valvo");
$obj->setColor("Red");
$obj->setSize(18);

$obj->printAll();








?>