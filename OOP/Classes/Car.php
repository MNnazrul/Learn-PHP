<?php

class Car {
    // properties /Fields
    private $brand;
    private $color;

    // Constructor
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }


    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $allowedColors = [
            "Red", 
            "Green", 
            "Blue", 
            "Yellow", 
            "White"
        ];
        if(in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }


    // Method
    public function GetCarInfo() {
        echo "Color of the Car - {$this->color} and the brand =  {$this->brand}";
    }


}


