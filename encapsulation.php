<?php
ini_set('display_errors', 1);

class User {
 private $name="";
 private $age="";

 public function setName($name) {
  $this->name = $name;
  return $this;
 }

 public function setAge($age) {
  $this->age = $age;
  return $this;
 }
 public function getInfo()
 {
     # code...
     echo "My name is $this->name and age is $this->age ";
 }
}

$user = new User();
$user->setName('Sushant')->setAge("21")->getInfo();