<?php
//require 'visibility.php';
//require 'properties&methods.php';
//require 'cons&desc.php';
//require 'delete_obj.php';
//require 'static_propertie&methods.php';
//declare(strict_types = 1);
//require 'declaration.php';
//require 'scope1.php';
//require 'scope2.php';
//require 'interfaces.php';
require 'abstract.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   /* visibility
   $pet01 = new Pet();
   
   echo $pet01->owner();*/

   //pr&mth
   /*
    $person1 = new Person();
    $person1->setName("Anne"); 
    echo $person1->name;

     $person2 = new Person();
     $person1->setName("U1");
     echo $person2->name;*/

    //constructor
     /*$person1 = new Person("Anne", "Black", 22);
     $person1->setName("U1");
     //echo $person1->name; 
     echo $person1->name; 
     echo $person1->eyeColor; 
     echo $person1->age;*/

    //destructor
    /*$person1 = new Person("Daniel", "Blue", 22);
    echo $person1->getName(); */

    //delete object
    /*$object = new newClass;
    unset($object);
    echo $object->getProperty();*/

    //static properties & method
    /*echo Person::$drinkingAge;
    Person::setDrinkingAge(18);
    echo Person::$drinkingAge;
    $person1 = new Person("Anne", "Black", 22);
    echo $person1->getDA();*/

    //declaration
    /*$person1 = new Person();

    try {
        $person1->setName("Anne");
        echo $person1->getName();
    } catch (TypeError $e) {
        echo "Error!" . $e->getMessage();
    }*/

    ?>