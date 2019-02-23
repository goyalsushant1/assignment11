<?php
class TestClass
{
    public $testVar = "default value";
    public function __construct($varValue)
    {
       $this->testVar = $varValue;               
    }
}    
$object = new TestClass('another value');
print $object->testVar;
?>