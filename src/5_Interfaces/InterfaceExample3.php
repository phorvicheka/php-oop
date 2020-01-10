<?php

/**
 * Interface is defined as a syntactical contract that all the classes implementing the interface should follow.
 * Think of an interface as the contract for your implementations.
 * 
 */
interface Loger
{
    public function execute($message);
}

/**
 * A class that implements an interface must provide an implementation of all the methods of that interface.
 */
class LogToFile implements Loger
{
    public function execute($message)
    {
        var_dump('log the message to file: ' . $message);
    }
}

class LogToDatabase implements Loger
{
    public function execute($message)
    {
        var_dump('log the message to database: ' . $message);
    }
}

class UserController
{
    private $logger;
    private $username;

    /**
     * 
     * Instead of passing concrete class LogToFile, we change it to Interface Loger. 
     * So that, the method _construct become flexible.
     * We can then pass any classes that implement the interface Loger.
     * 
     * And if we have another type of Logger, we don't need to change this UserController.
     * We can just create another class that implement this interface logger.
     * By using interface, it makes this class maintainable.
     *
     */
    public function __construct(String $username, Loger $logger)
    {
        $this->logger = $logger;
        $this->username = $username;
    }

    public function register()
    {
        // do register stuff

        // log this information
        $this->logger->execute($this->username . ' registered successfully');
    }
}

$logToFile = new LogToFile();
$userController = new UserController('Sok', $logToFile);
$userController->register();

$logToDatabase = new LogToDatabase();
$userController = new UserController('Sam', $logToDatabase);
$userController->register();
