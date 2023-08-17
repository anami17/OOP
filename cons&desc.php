<?php

class Person {
    //properties
    private $name; 
    private $eyeColor;
    private $age;
    
    //constructor
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }
    //method
    public function setName($name) {
        $this->name = $name; 
    } 

    //destructor, set properties to private
    public function getName() {
        return $this->name;
    }

    
} 
?>