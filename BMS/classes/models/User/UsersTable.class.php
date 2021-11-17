<?php

class UsersTable extends DatabaseConnection
{
    protected function getUser(string $eId, string $password): ?array
    {
        $hashedPass = md5($password);

        $usersQuery = "SELECT * FROM users WHERE eId = ?";
        $stmt = $this->connect()->prepare($usersQuery);
        $stmt->execute([strtoupper($eId)]);
        
        if ($stmt->rowCount() < 1) return null;
        $user = $stmt->fetch();
        return strcmp($user["password"], $hashedPass) == 0 ? $user : null;
    }

    protected function addUser(User $user, $edit = false): bool {
        $eId = $user->get_eId();
        $password = md5($user->getPassword());
        $name = $user->getName();
        $surname = $user->getSurname();
        $telephone = $user->getTelephone();
        $street = $user->getStreetName();
        $house = $user->getHouse();
        $postCode = $user->getPostCode();
        $townId = $this->getTownId($user->getTown());
        $image = $user->getImage();

        if ($edit == false) {
            $addQuery = "INSERT INTO users (eId, password, name, surname, telephone, streetName, house, postCode, townId, imagePath) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $insert = $this->connect()->prepare($addQuery);
            $insert->execute([$eId, $password, $name, $surname, $telephone, $street, $house, $postCode, $townId, $image]);

            if ($insert->rowCount() < 1) return false;   
        } else {
            $editQuery = "UPDATE users SET name = ?, surname = ?, telephone = ?, streetName = ?, house = ?, postCode = ?, townId = ?, imagePath = ? WHERE eId = ?";
            
            $edit = $this->connect()->prepare($editQuery);
            $edit->execute([$name, $surname, $telephone, $street, $house, $postCode, $townId, $image, $eId]);

            if ($edit->rowCount() < 1) return false;
        }
        
        return true;
    }
    
    protected function checkUser(string $eID): bool
    {
        $query = "SELECT id FROM users WHERE eId = ?";
        $stmt = $this->connect()->prepare($query);

        if (!$stmt->execute([$eID])) {
            $stmt = null;
            header("Location:../../views/register.php?error=stmtfailed");
            die();
        }
        
        if ($stmt->rowCount() < 1) return false;
        return true;
    }

    protected function deleteUser(string $eID): bool {
        $query = "DELETE FROM users WHERE eId = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$eID]);
        
        if ($stmt->rowCount() < 1) return false;
        return true;
    }
    
    protected function getTownId(string $town): ?int {
        $pdo = $this->connect();
        $rowCount = 0;
        $result = array();

        do {
            $query = "SELECT id FROM towns WHERE town = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$town]);
            $result = $stmt->fetchAll();

            $rowCount = count($result);
            if ($rowCount == 1) break;

            $insertQuery = "INSERT INTO towns (town) VALUES (?)";
            $insertStmt = $pdo->prepare($insertQuery);
            $insertStmt->execute([$town]);
        } while ($rowCount == 0);

        return $result[0]['id'];
    }
    
    public function getTown(int $id): ?string {
        $townQuery = "SELECT * FROM towns WHERE id = ?";
        $stmt = $this->connect()->prepare($townQuery);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();
        $rowCount = count($result);
        
        if ($rowCount < 1) return null;
        return $result[0]['town'];
    }
}