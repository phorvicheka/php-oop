<?php

/**
 * Interface is defined as a syntactical contract that all the classes implementing the interface should follow.
 * Think of an interface as the contract for your implementations.
 * 
 */
interface Animal {
    public function communication();
}

class Dog implements Animal {
    public function communication() {
        return 'bark';
    }
}

/**
 * A class that implements an interface must provide an implementation of all the methods of that interface.
 */
class Cat implements Animal {
    // public function communication() {
    //     return 'meow';
    // }
}
