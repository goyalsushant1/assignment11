<?php

ini_set('display_errors', 1);


class A
{
    public function function_a(){
        echo 'class A <br>';
    }
}

class B extends A
{
    public function function_b(){
        echo 'class B <br>';
    }
}

class C extends B
{
    public function function_c(){
        echo 'class C <br>';
    }
}
$object = new C();
echo $object->function_c();
echo $object->function_b();
echo $object->function_a();

?>