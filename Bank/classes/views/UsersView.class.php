<?php

class UsersView extends UsersController
{
    public function showUser(string $eId): User
    {
        $user = $this->getUser($eId);
        $town = $this->getTown(intval($user['townId']));
        return new User($user['eId'], "", $user['name'], $user['surname'], $user['telephone'], $user['streetName'], $user['house'], $user['postCode'], $town);
    }
    
    public function createUser(string $name, string $surname, string $telephone, string $street) {
        
    }
}