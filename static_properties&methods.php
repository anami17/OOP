<?php
class Person {
    //properties
    private $name; 
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;
    
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

    //accessing static from non static method
    public function getDA() {
        return self::$drinkingAge;
        //return $this->name;
    }

    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }
    
} 

?>