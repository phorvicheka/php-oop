<?php

class Square
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Triangle
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$square = new Square('blue');
$triangle = new Triangle('green');
var_dump($square);
var_dump($triangle);