<?php

class Calculator
{
    function plus($x, $y)
    {
        return $x+$y;
    }

    function minus($x , $y)
    {
        return $x - $y;
    }

    public function multi($x, $y)
    {
        return $x * $y;
    }

    public function divide($x, $y)
    {
        if($y == 0) return 0;
        else return $x/$y;
    }
}