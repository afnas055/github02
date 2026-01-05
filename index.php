<?php

class Vehicle
{
    
    public $make;
    public $model;
    protected $speed = 0;

    
    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }


    public function setSpeed($speed)
    {
        
            $this->speed = $speed;
        
    }


   
    public function getSpeed()
    {
        return $this->speed;
    }

    
    public function getInfo()
    {
        return "vehicle : $this->make"."<br>"."Model :$this->model"."<br>"."Speed :$this->speed"."km/h";
    }

}


class Car extends Vehicle
{
    
    public function getInfo()
    {
        
      return  parent::getInfo();

    }

}

$car = new Car("Toyota", "2025", 4);
$car->setSpeed(120);
echo $car->getInfo();

?>
