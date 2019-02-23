<?php 
function unset_value() 
{ 
    static $var = 0; 
    $var++; 
    echo "Before unset:".$var." "; 
    unset($var);
    $var = 5; 
    echo "After unset:".$var."<br>";           
} 
unset_value(); 
unset_value(); 
unset_value(); 
unset_value(); 