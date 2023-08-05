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

   public function printAll(){

   }

  

}

// object declearation -->

$obj = new Car();
$obj->setName("Valvo");
$obj->setColor("Red");
$obj->setSize(18);

$obj->printAll();








?>