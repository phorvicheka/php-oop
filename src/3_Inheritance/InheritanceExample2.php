<?php

/**
 * Super-class
 * 
 * Use a super-class
 * if you want to introduce common attributes and behavior/method that should be inherited by all sub-classes.
 * 
 */
class Shape
{
    // common attributes
    protected $color;
    protected $marterial = 'iron';

    public function __construct($color='red')
    {
        $this->color = $color;
    }

    //  common behavior or method
    protected function getColor()
    {
        return $this->color;
    }

    protected function getArea()
    {
    }
}

/**
 * Sub-class extends Super-class
 * 
 * will inherite all public/protected attributes and behaviors of its super class.
 * 
 */
class Square extends Shape
{
    private $length = 5;

    // Override behavior or method
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    private $base = 7;
    private $height = 4;
    // Override attribute
    // private $marterial = 'plastic';
    // will throw Fatal error: Access level to Triangle::$marterial must be protected (as in class Shape) or weaker
    protected $marterial = 'plastic';

    // Override behavior or method
    public function __construct($color = 'green')
    {
        $this->color = $color;
    }

    // Override behavior or method
    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}

$shape = new Shape();
$square = new Square();
$triangle = new Triangle();
var_dump($shape);
var_dump($square);
var_dump($square->getArea());
var_dump($triangle);
var_dump($triangle->getArea());