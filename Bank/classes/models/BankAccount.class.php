<?php

include "User.class.php";

class BankAccount
{
    private int $accountNumber;
    private float $balance;
    private User $person;

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }


    public function getPerson(): User
    {
        return $this->person;
    }
    
    public function __construct(string $id, string $name, string $surname, string $telephone, int $accountNumber, float $balance) 
    {
        $this->person = new User($id, $name, $surname, $telephone);
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    
    public function deposit(float $amount): bool 
    {
        if ($amount <= 0) return false;
        
        $this->balance += $amount;
        return true;
    }
    
    
    public function withdraw(float $amount): bool 
    {
        if ($this->balance - $amount <= 0) return false;
        
        $this->balance -= $amount;
        return true;
    }
}

?>