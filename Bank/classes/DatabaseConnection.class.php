<?php

class DatabaseConnection
{
    private string $username;
    private string $password;
    private string $host;
    private string $database;
    private int $port;
    protected mysqli $mysqli;
    
    public function __construct(string $username, string $password, string $host, string $database, int $port = 3306)
    {
        $this->username = $username;
        $this->password = $password;
        $this->host = $host;
        $this->database = $database;
        $this->port = $port;
    }
    
    public function connect(): string
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
        if ($this->mysqli->connect_errno)
            return nl2br("Failed to connect to MySQL:\n\n{$this->mysqli->connect_error}");
        
        return "Connection Opened";
    }
    
    public function close(): string
    {
        if ($this->mysqli->close())
            return "Connection Closed";
        
        return "Error while closing connection";
    }
}