<?php

class User
{

    public $name;
    /**
     * Encapsulation
     * 
     * The term sounds more complicated as it is.
     * The idea behind it is hiding variables and methods that should not be accessed from the public interface.
     * protected: protected variables and methods can still be accessed from class extensions
     * private: even class extensions have no access to private variables and methods
     * 
     */
    private $email;
    private $public = false;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function makeProfilePublic()
    {
        $this->public = true;
    }

    /**
     * getEmail
     *
     * The e-mail address of $user is only available if the profile is public.
     * We realize this with the help of a getter function and private/protected variables.
     * 
     * @return $email if user is public
     */
    public function getEmail()
    {
        if ($this->public) {
            return $this->email;
        }

        throw new Exception('Profile is not public');
    }
}


$user = new User('Jan', 'info@example.org');

/**
 * Getters and setters
 * 
 * If you want to provide more protection and security to your variables you can make use of getters() and setters().
 * In contrast to manipulating or retrieving variables directly, 
 * you access those variables through a setter function (for manipulating purpose) 
 * or a getter function (for retrieving purpose).
 * 
 * Those functions enable you to add additional behavior, 
 * e.g. make the $email only available if $public is true.
 * 
 * private $email; => we can't access it directly like: $user->email;
 * you need to access it through a getter/setter function
 * 
 */
$user->makeProfilePublic();
var_dump($user->name); // Jan
// var_dump($user->email); // Fatal error: Uncaught Error: Cannot access private property User::$email
var_dump($user->getEmail());
