<?php
class Person
{
    public $name;
    public $age;

    public function __construct($name="",  $age=21)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function __wakeup() {
        echo "It is called when the unserialize() method is called outside the class.<br>";
        $this->name = 2;
    }
}

$person = new Person('Sushant');
var_dump(serialize($person));
echo '<br>';
var_dump(unserialize(serialize($person)));