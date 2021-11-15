<?php

class User
{
    private string $password;
    private string $eId;
    private string $name;
    private string $surname;
    private string $telephone;
    private string $streetName;
    private string $house;
    private string $postCode;
    private string $town;
    private string $image;
    
    public function get_eId(): string
    {
        return $this->eId;
    }
    
    public function getPassword(): string
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function getFullName(): string
    {
        return $this->getName() . " " . $this->getSurname();
    }

    public function getTown(): string
    {
        return $this->town;
    }
    
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }
    
    public function getHouse(): string
    {
        return $this->house;
    }
    
    public function getAddress(): string
    {
        return nl2br("\n\n$this->house,\n$this->streetName,\n$this->town,\n$this->postCode"); 
    }

    public function getImage(): string
    {
        return $this->image;
    }
    
    public function __construct(string $eId, ?string $password, string $name, string $surname, string $telephone, string $streetName, string $house, string $postCode, string $town, string $image)
    {
        $this->eId = $eId;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->telephone = $telephone;
        $this->streetName = $streetName;
        $this->house = $house;
        $this->postCode = $postCode;
        $this->town = $town;
        $this->image = $image;
    }
}