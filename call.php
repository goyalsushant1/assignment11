<?php

class call_example {
    private $x = array('a', 'b', 'c');
    public function

    __call($method, $args) {
        print "Method $method called:<br>";
        var_dump($args);
        echo '<br>';
        return $this->x;
    }
}

$object = new call_example();
$a = $object->test(4, 5, 6);
var_dump($a);