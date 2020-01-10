<?php

class CustomerRepository
{
    private $database;

    /**
     * __construct
     *
     * @param IDatabase $database
     * 
     * Example of loose coupling
     * Loose coupling means they are mostly independent.
     * Loose coupling is recommended because it's easier to test and maintain.
     * 
     * Loose coupling is achieved by means of a design 
     * that promotes single-responsibility and separation of concerns.
     * 
     * Interfaces are a powerful tool to use for decoupling.
     * Classes can communicate through interfaces rather than other concrete classes, 
     * and any class can be on the other end of that communication simply by implementing the interface.
     * 
     * The constuctor method of CustomerRepository depends on an object of type interface IDatabase.
     * We can pass any objects of class that implements this interface IDatabase.
     * 
     */
    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }

    public function Add(string $customerName)
    {
        $this->database->addRow("Customer", $customerName);
    }
}

interface IDatabase
{
    public function addRow(String $table, String $value);
}

class MysqlDatabase implements IDatabase
{
    public function addRow(String $table, String $value)
    {
    }
}

class PostgresDatabase implements IDatabase
{
    public function addRow(String $table, String $value)
    {
    }
}

$mysqlDatabase = new MysqlDatabase();
$customerRepository = new CustomerRepository($mysqlDatabase);
//$postgresDatabase = new PostgresDatabase();
//$customerRepository = new CustomerRepository($postgresDatabase);
