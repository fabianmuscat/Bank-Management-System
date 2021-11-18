<?php

class AccountController extends BankAccount
{
    public function __construct(string $username = "root", int $port = 3306)
    {
        parent::__construct($username, $port);
    }

    public function getAccounts(string $eID): array {
        
        $accounts = $this->getUserAccounts($eID);
        if ($accounts == null) {
            session_start();
            $_SESSION["ERROR"] = "No Accounts Found";
            exit();
        }

        $ftdAccounts = [];
        foreach ($accounts as $account)
            array_push($ftdAccounts, new Account($account['iban'], $account['other_name'], $account['balance'], $account['description'],));
        
        return $ftdAccounts;
    }
}