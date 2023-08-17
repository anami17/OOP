<?php

//second class
class SecondClass extends FirstClass{
    //properties
    public static $staticProperty = "A static property.";

    //method
    public static function anotherTest() {
        echo parent:: EXAMPLE;
        echo self::$staticProperty;
    }
}

    $b = SecondClass::anotherTest();
    echo $b;
?> 