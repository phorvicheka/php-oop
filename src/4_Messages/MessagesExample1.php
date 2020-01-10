<?php

class Club
{
    public $name;
    protected $team = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * hire
     * 
     * @param Player $player
     * @return void
     * 
     * Messages
     * This is about sending data among objects. Consider the following example. A Club hires Player.
     * 
     * 
     * Type declaration
     * Type declaration, also known as type hinting is a security mechanism 
     * that proofs whether an argument for a method is of the demanded type.
     * If this is not the case, an exception will be thrown.
     *      * e.g. hire() expects an argument of type Player.
     * 
     * 
     * Dependencies
     * In general, we talk about dependencies 
     * when the instantiation of an object (or usage of a method) depends on other objects instances.
     * In general, the fewer dependencies a class has, the better will be its handling, refactoring and testing.
     * Concepts in this field are tight- and loose coupling.
     * 
     * 
     * The amount of coupling refers to how much the design of one class depends on the design of another class.
     * In other words, how often do changes in class A force related changes in class B?
     * Tight coupling means the two classes often change together;
     * Loose coupling means they are mostly independent.
     * In general, loose coupling is recommended because it's easier to test and maintain.
     *
     */
    public function hire(Player $player)
    {
       $this->team[] = $player;
    }

    public function getTeam()
    {
        return $this->team;
    }
}


class Player
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

// create a new club
$kh = new Club('KH');

// create some players
$makara = new Player('Makara');
$tola = new Player('Tola');
$seyha = new Player('Seyha');

// club hires player
$kh->hire($makara);
$kh->hire($tola);
$kh->hire($seyha);

// get team roster of club 
var_dump($kh->getTeam()); // Makara, Tola, Seyha