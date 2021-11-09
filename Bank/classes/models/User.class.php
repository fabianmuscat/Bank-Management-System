<?php

class User
{
    private string $id;
    private string $eId;
    private string $name;
    private string $surname;
    private string $telephone;
    private string $streetName;
    private string $house;
    private string $postCode;
    private string $town;

    public function getId(): string
    {
        return $this->id;
    }
    
    public function get_eId(): string
    {
        return $this->eId;
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
    
    
    public function getAddress(): string
    {
        return nl2br("\n\n$this->house,\n$this->streetName,\n$this->town,\n$this->postCode"); 
    }
    
    public function __construct(string $id, string $eId, string $name, string $surname, string $telephone, string $streetName, string $house, string $postCode, string $town)
    {
        $this->id = $id;
        $this->eId = $eId;
        $this->name = $name;
        $this->surname = $surname;
        $this->telephone = $telephone;
        $this->streetName = $streetName;
        $this->house = $house;
        $this->postCode = $postCode;
        $this->town = $town;
    }
}