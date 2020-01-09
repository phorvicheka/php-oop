<?php


/**
 * FootballPlayer Class
 *
 * Class is a blueprint for an object that defines certain characteristics and behavior.
 * 
 * @author phorvicheka@yahoo.com
 * @version 0.1.0
 */
class FootballPlayer
{

    /**
     * $name
     *
     * Variables are containers to store information. 
     * 
     * For a class perspective this may be attributes.
     * 
     * Variables in PHP always start with the $ sign, 
     * are case sensitive and must either start with a letter (A-Z, a-z) or an _.
     * 
     * Scope refers to the visibility of variables and methods.
     * We differentiate among three different types of visibility:
     * public: makes a variable/method available from everywhere, thus also other classes and instances of objects.
     * protected: makes a variable/method available in the current class and all its sub-classes, including the parent class.
     * private: makes a variable/method only available within it's own class.
     * 
     */
    public $name;
    public $position;

    /**
     * __construct
     * 
     * A method is a function within a class. It defines certain behavior of a class.
     * 
     * constructor method: A constructor is a special method
     * that is trigged whenever a new object of a class will be initiated.
     *
     * @param mixed $name
     * @param mixed $position
     * @return void
     */
    public function __construct($name, $position)
    {
        // $this is a reference to an instance or object of this class at run time
        $this->name = $name;
        $this->position = $position;
    }

}

/**
 * An object is a representation of a defined class. 
 * When we talk about a specific object we refer to it as an instance. 
 * In more technical terms: An instance is an object in memory. It can be addressed with the keyword $this.
*/
$playerA = new FootballPlayer('Marco Reus', 'Striker');
$playerB = new FootballPlayer('Axel Witsel', 'Midfield');

var_dump($playerA->name); // Marco Reus
var_dump($playerB); // Axel Witsel, Midfield
