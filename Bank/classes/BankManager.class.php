<?php

class BankManager extends DatabaseConnection
{
    private function capitalize(string $value): string {
        $firstLetter = strtoupper($value[0]) ;
        return $firstLetter . substr($value, 1);
    }
    
    public function getTownId(string $town): ?int {
        $query = "SELECT id FROM towns WHERE town = '$town';";
        $result = $this->mysqli->query($query);
        $town = $this->capitalize($town);
        
        if ($result->num_rows < 1) {
            $this->mysqli->query("INSERT INTO towns (town) VALUES ('$town')");
            
            $query = "SELECT id FROM towns WHERE town = '$town';";
            $result = $this->mysqli->query($query);
        }
        
        return $result->fetch_row()[0];
    }
    
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
    
    public function addUser(User $user): bool {
        $eId = $user->get_eId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $telephone = $user->getTelephone();
        $street = $user->getStreetName();
        $house = $user->getHouse();
        $postCode = $user->getPostCode();
        $townId = $this->getTownId($user->getTown());
        
        $this->mysqli->query("INSERT INTO users (eId, name, surname, telephone, streetName, house, postCode, townId) VALUES ('$eId', '$name', '$surname', '$telephone', '$street', '$house', '$postCode', $townId)");
        $rowsAdded = $this->mysqli->affected_rows;
        if ($rowsAdded < 1) return false;
        return true;
    }
    
    private function encrypt(string $password): string {
        return "";
    }
}