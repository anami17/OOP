<?php

class Person {

    //change to protected when use inheritance
    protected $name = "Anne";
}

//add extends for inheritance
class Pet extends Person{
    public function owner() {
        $a = $this->name;
        return $a;
    }
}