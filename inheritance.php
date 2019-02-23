<?php

class Human {
    protected $name;
 
    public function __construct($name){
        $this->name = $name;
    }
}

class Person extends Human {
    public function getName(){
        return $this->name; 
    }
}

$person = new Person('Sushant');
echo $person->getName();