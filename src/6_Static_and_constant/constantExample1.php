<?php

class Math {
    
    /**
     * Constant is just a constant, i.e. you can't change its value after declaring.
     */
    const PI = 3.14;
    /**
     * Static variable or method is accessible without making an instance of a class 
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

var_dump(Math::PI);
Math::PI=3.145;