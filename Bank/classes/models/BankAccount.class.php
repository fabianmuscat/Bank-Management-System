<?php

include "User.class.php";

class BankAccount
{
    private int $accountNumber;
    private float $balance;
    private User $person;
    private string $password;

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
    
    public function getPassword(): string {
        return $this->password;
}
    
    public function __construct(int $accountNumber, float $balance, string $password, User $user) 
    {
        $this->person = $user;
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->password = $password;
    }
    
}

?>