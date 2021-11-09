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

    public function getUsers(): array
    {
        $usersQuery = "SELECT * FROM users;";
        $users = array();

        if ($result = $this->mysqli->query($usersQuery)) {
            while ($row = $result->fetch_assoc()) {
                $town = $this->getTownById($row["townId"]);
                
                if ($town == null) $town = "N/A";
                array_push($users, 
                    new User($row["id"], $row["eId"], $row["name"], $row["surname"], $row["telephone"], $row["streetName"], $row["house"], $row["postCode"], $town));
            }
        }
        return $users;
    }
}