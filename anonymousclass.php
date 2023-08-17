<?php
    include_once "simpleclass.php";
    //regular class
    $obj = new SimpleClass();
    $obj->helloWorld();

    //anonymous class

    $newObj = new Class() {
        public function helloWorld(){
            echo "Hello World";
        }
    };

    $newObj->helloWorld();
?>