<?php

class CustomerRepository
{
    private $database;

    /**
     * __construct
     *
     * @param Database $database
     * 
     * Example of tight coupling
     * Tight coupling means the two classes often change together.
     * Tight coupling arises when a class assumes too many responsibilities, 
     * or when one concern is spread over many classes rather than having its own class.
     * 
     * The constuctor method of CustomerRepository depends on an object of (concrete) class Database.
     * What if we have different types of Database? For example: MysqlDatabase or PostgresDatabase.
     */
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function Add(string $customerName)
    {
        $this->database->addRow("Customer", $customerName);
    }
}

class Database
{
    public function addRow(String $table, String $value)
    {
    }
}

$database = new Database();
$customerRepository = new CustomerRepository($database);
