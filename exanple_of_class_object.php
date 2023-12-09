/*
1. In object-orientated programming, what is the difference between a class and an object

Answer
• Class describes the contents of the object. A class is a template/entity that determines how an object will be created
and what the object will contain. In other words, it is a blueprint or a set of instruction to build a specific type of
object.
• An object is an instance of a class and with its own set of property values. It has its own state (property values)
and can perform actions (invoke methods).
Example:
*/

<?php

class Dog {
    /* Properties */
    private $size;
    private $colour;
    private  $age;

    /* Constructor method */
    public function __construct($size, $colour, $age) {
        $this->size = $size;
        $this->colour = $colour;
        $this->age = $age;
    }

    /*  Method */
    public function getInfo() {
        echo 'The size is: ' . $this->size . ', The colour is: ' . $this->colour.  ' and the Age is: ' . $this->age;
    }
}


// Example usage

// Creating objects (instances) of the Dog class
$dog1 = new Dog('Big', 'Brown', '5');
$dog2 = new Dog('Small', 'white', '3');

// Let’s Access the object properties and invoking methods
echo $dog1->size;         // Output: Big
$dog2->getInfo();     // Output: The size is: Small, The colour is: white and the Age is: 3

?>