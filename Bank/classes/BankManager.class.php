<?php

class BankManager extends DatabaseConnection
{
    public function getTownById(int $id): ?string
    {
        $query = "SELECT * FROM towns WHERE id = $id;";
        $result = $this->mysqli->query($query);
        
        if ($result->num_rows < 1) return null;
        return $result->fetch_row()[1];
    }
    
    private function encrypt(string $password): string {
        return "";
    }
}