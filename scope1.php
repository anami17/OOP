<?php

//first class
class FirstClass {
    //properties
    const EXAMPLE = "You can't change this!";

    //methods
    public static function test() {
        $testing = "This is a test.";
        return $testing;
    }
}
    $a = FirstClass::test();
    echo $a;
?>