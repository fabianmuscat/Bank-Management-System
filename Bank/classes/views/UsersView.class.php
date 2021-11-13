<?php

class UsersView extends UsersController
{
    public function __construct(string $username = "root", int $port = 3306)
    {
        parent::__construct($username, $port);
    }

    public function showUser(string $eId): User
    {
        $user = $this->getUser($eId);
        $town = $this->getTown(intval($user['townId']));
        return new User($user['eId'], "", $user['name'], $user['surname'], $user['telephone'], $user['streetName'], $user['house'], $user['postCode'], $town);
    }
}