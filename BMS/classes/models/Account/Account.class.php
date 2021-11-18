<?php

class Account
{
    private string $iban;
    private string $otherName;
    private float $balance;
    private string $description;

    public function getIban(): string
    {
        return $this->iban;
    }

    public function getOtherName(): string
    {
        return $this->otherName;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function __construct(string $iban, string $otherName, float $balance, string $description)
    {
        $this->iban = $iban;
        $this->otherName = $otherName;
        $this->balance = $balance;
        $this->description = $description;
    }
}