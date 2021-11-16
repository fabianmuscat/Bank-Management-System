<?php

class LoginController extends UsersTable
{
    public function __construct(string $username = "root", int $port = 3306)
    {
        parent::__construct($username, $port);
    }
    
    public function login(string $eID, string $password): User
    {
        $user = $this->getUser($eID, $password);
        if ($user == null) {
            session_start();
            $_SESSION["ERROR"] = "Invalid eID or Password";
            exit();
        }
        
        $town = $this->getTown(intval($user['townId']));
        
        return new User(
            $user["eId"],
            "",
            $user["name"],
            $user["surname"],
            $user["telephone"],
            $user["streetName"],
            $user["house"],
            $user["postCode"],
            $town,
            $user["imagePath"]
        );
    }
}