<?php

class DatabaseConnection
{
    private string $host;
    private string $database;
    private string $username;
    private string $password;
    private int $port;
    
    public function __construct(string $username = "root", int $port = 3306)
    {
        $this->username = $username;
        $this->password = "";
        $this->host = "localhost";
        $this->database = "bank";
        $this->port = $port;
    }
    
    protected function connect(): PDO
    {
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->database;";
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}