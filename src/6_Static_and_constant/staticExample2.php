<?php

class Math {
    
    /**
     * Static variable is accessible without making an instance of a class 
     * and therefore shared between all the instances of a class.
     */
    static $count = 1;

    public function add(...$nums){
        return array_sum($nums);
    }
    
    public static function sum(...$nums){
        return array_sum($nums);
    }

    public function increment() {
        Math::$count++;
    }

}

$math = new Math();
var_dump($math->count); // Notice: Accessing static property Math::$count as non static
var_dump(Math::$count);
$math->increment();
var_dump(Math::$count);

$math1= new Math();
var_dump($math1);
var_dump(Math::$count);
$math1->increment();
var_dump(Math::$count);