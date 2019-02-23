<?php

class ParentClass{
   function myFunction() {
      return "Inside Parent";
   }
}

class ChildClass extends ParentClass {
   function myFunction() {
      return "Inside child";
   }
}

$parent = new ParentClass();
$child = new ChildClass();
echo $parent->myfunction().'<br>';
echo $child->myfunction();