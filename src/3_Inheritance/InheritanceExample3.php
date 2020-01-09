<?php
/**
 * Abstract classes
 * 
 * Use an abstract class by adding 'abstract' keyword
 * if you want to introduce common attributes and behavior/method that should be inherited by all sub-classes.
 * However, an abstract class can not be instantiated by itself.
 * 
 */
abstract class Shape
{
    protected $color;
    protected $marterial = 'iron';

    public function __construct($color = 'red')
    {
        $this->$color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * Abstract methods
     * 
     * Use an abstract methods by adding 'abstract' keyword
     * If you want that each subclass defines it individual behavior for e.g. area calculation
     *
     * NOTE: A similar result can be achieved by making use of interface. 
     * In deed, from a design pattern perspective there exists the claim: 
     * Favor composition over inheritance.
     * 
     */
    abstract protected function getArea();
}

class Square extends Shape
{
    protected $length = 5;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 7;
    protected $height = 4;
    protected $marterial = 'plastic';

    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}

/* class Circle extends Shape
{

} */
// Class Circle contains 1 abstract method and 
// must therefore be declared abstract or implement the remaining methods (Shape::getArea)

// $shape = new Shape();
// will throw Fatal error: Uncaught Error: Cannot instantiate abstract class Shape
$square = new Square();
$triangle = new Triangle();
var_dump($square);
var_dump($square->getArea());
var_dump($triangle);
var_dump($triangle->getArea());
