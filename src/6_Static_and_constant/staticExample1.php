<?php

class Math {
    
    public function add(...$nums){
        return array_sum($nums);
    }
    
    /**
     * Static method is accessible without making an instance of a class 
     * and therefore shared between all the instances of a class.
     */
    public static function sum(...$nums){
        return array_sum($nums);
    }

}

$math = new Math();
var_dump($math);
var_dump($math->add(1,2,3));

var_dump(Math::sum(1,2,3));
