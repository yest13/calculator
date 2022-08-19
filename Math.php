<?php

class Math implements iMath
{
    public function sum($leftArg, $rightArg)
    {
        return $leftArg + $rightArg;
    }
    public function subtract($leftArg, $rightArg)
    {
        return $leftArg - $rightArg;
    }
    public function multiply($leftArg, $rightArg)
    {
        return $leftArg * $rightArg;
    }
    public function divide($leftArg, $rightArg)
    {
        return $leftArg / $rightArg;
    }
}