<?php

/**
 * A class that implements an interface must provide an implementation of all the methods of that interface.
 */
class LogToFile
{
    public function execute($message)
    {
        var_dump('log the message to file: ' . $message);
    }
}

class UserController
{
    private $logger;
    private $username;

    public function __construct(String $username, LogToFile $logger)
    {
        $this->logger = $logger;
        $this->username = $username;
    }

    public function register()
    {
        // do register stuff
        // ...

        // log this information
        $this->logger->execute($this->username . ' registered successfully');
    }
}

$logToFile = new LogToFile();
$userController = new UserController('Sok', $logToFile);
$userController->register();
