<?php
class demo
{
    function  __construct()
    {
        echo  "Object instantiated"."<br/>";
    }
    function work()
    {
        echo  "Function called "."<br/>";
    }
    function __destruct()
    {
        echo  "&nbsp;Object destroyed";
    }
}
	
$obj= new demo();
$obj->work();
echo is_object($obj);
?>