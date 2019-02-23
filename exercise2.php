<?php

class Car {

  public $comp; 
  public $color = 'beige';
  public $hasSunRoof = true;

  public function hello()
  {
    return "beep";
  }
}
 
$bmw = new Car ();
$mercedes = new Car ();
 
// Set the values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
 
echo 'Color of BMW : '.$bmw -> color."<br />";
echo $bmw -> comp."<br />";
echo $bmw -> hello()."<br />";
echo 'Color of Mercedes : '.$mercedes -> color."<br />";
echo $mercedes -> comp.'<br >';
echo $mercedes -> hello();