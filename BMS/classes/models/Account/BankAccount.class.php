<?php

class BankAccount extends DatabaseConnection
{
    public function __construct(string $username = "root", int $port = 3306)
    {
        parent::__construct($username, $port);
    }

    protected function openAccount(Account $account, string $eID) 
    {
        
    }
    
    protected function closeAccount(Account $account, string $eID)
    {
        
    }
    
    protected function deposit(Account $account, float $balance) 
    {
        
    }
    
    protected function withdraw(Account $account, float $balance)
    {
        
    }
    
    protected function getUserAccounts(string $eID): ?array
    {
        $query = 
            "SELECT ac.iban, ac.other_name, ac.balance, act.description " . 
            "FROM accounts as ac " . 
            "JOIN account_types as act " . 
            "ON ac.account_type_id = act.id " . 
            "JOIN users us " . 
            "ON ac.user_id = us.id " .
            "WHERE us.eId = ?";
        
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$eID]);

        return $stmt->fetchAll();
    }
}