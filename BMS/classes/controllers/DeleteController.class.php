<?php

class DeleteController extends UsersTable
{
    public function __construct(string $username = "root", int $port = 3306)
    {
        parent::__construct($username, $port);
    }
    
    public function delete(string $eID): bool {
        return $this->deleteUser($eID);
    }
}