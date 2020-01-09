<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        //return $this->age;
        return $this->age * 365;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('Profile is not old enough');
        }

        $this->age = $age;

        return $this;
    }
}

$sok = new Person('Sok');
var_dump($sok);

$sok->setAge(18);
var_dump($sok);

$sok->age = 10;
var_dump($sok);

$sok->setAge(10);
