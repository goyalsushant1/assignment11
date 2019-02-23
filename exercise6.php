<?php

class CalculateFactorial{

    function __construct($value){
        $this->number = $value;
    }

    function factorial_call()
    {
        return "The factorial of $this->number is : ".$this->fact($this->number);
    }

    public function fact($num)
    {
        # code...
        if($num<=1)
        {
            return 1;
        }
        else
        {
            return $num * $this->fact($num-1);
        }
    }
}

$calculate = new CalculateFactorial(10);
echo $calculate->factorial_call();