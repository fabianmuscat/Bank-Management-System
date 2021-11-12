<?php

class UsersController extends UsersTable
{
    private array $inputs;

    public function __construct(string $firstName, string $lastName, string $telephone, string $street, string $house, string $postCode, string $town, string $eID, string $password, string $confirmation, string $dbUsername, int $port = 3306)
    {
        parent::__construct($dbUsername, $port);
        $this->inputs = [
            "First Name" => Utils::capitalize($firstName),
            "Last Name" => Utils::capitalize($lastName),
            "Telephone" => $telephone,
            "Street" => $street,
            "House" => $house,
            "Post Code" => strtoupper($postCode),
            "Town" => Utils::capitalize($town),
            "eID" => strtoupper($eID),
            "Password" => $password,
            "Password Repeat" => $confirmation
        ];
    }

    public function register() {
        session_start();
        if ($this->areInputsEmpty() == false) {
            $_SESSION["ERROR"] = "Empty Input";
            exit();
        }

        if ($this->checkForValidEId() == false) {
            $_SESSION["ERROR"] = "Invalid eID";
            exit();
        }

        if ($this->checkPasswords() == false) {
            $_SESSION["ERROR"] = "Passwords do not match";
            exit();
        }

        if ($this->checkPostCode() == false) {
            $_SESSION["ERROR"] = "Invalid Post Code Provided (Format: XYZ 1234)";
            exit();
        }

        if ($this->checkTelephone() == false) {
            $_SESSION["ERROR"] = "Invalid Telephone";
//            header("Location: ../pages/register.php?error=InvalidTelephone");
            exit();
        }

        $this->addUser(new User(
            $this->inputs["eID"],
            $this->inputs["Password"],
            $this->inputs["First Name"],
            $this->inputs["Last Name"],
            $this->inputs["Telephone"],
            $this->inputs["Street"],
            $this->inputs["House"],
            $this->inputs["Post Code"],
            $this->inputs["Town"]
        ));
    }

    private function areInputsEmpty(): bool
    {
        foreach ($this->inputs as $input)
            if (empty($input)) return false;
        return true;
    }

    private function checkForValidEId(): bool
    {
        $eid = $this->inputs["eID"];
        $userExists = $this->checkUser($eid);
 
        if ($userExists) return false;
        if (strlen($eid) < 7) return false;

        $lastChar = $eid[strlen($eid) - 1];

        if (ctype_digit(strval($lastChar))) return false;
        if ($lastChar != 'L' && $lastChar != 'M') return false;
        return true;
    }

    private function checkPasswords(): bool
    {
        return strcmp($this->inputs["Password"], $this->inputs["Password Repeat"]) == 0;
    }
    
    private function checkPostCode(): bool {
        $postCode = $this->inputs["Post Code"];
        if (strlen($postCode) != 8) return false;
        if (!str_contains($postCode, " ")) return false;
        if ($postCode[3] != ' ') return false;
        
        $beforeWhitespace = substr($postCode, 0, 3);
        $afterWhitespace = substr($postCode, 4);
        
        if (ctype_digit($beforeWhitespace)) return false;
        if (ctype_alpha($afterWhitespace)) return false;
        return true;
    }
    
    private function checkTelephone(): bool {
        $telephone = $this->inputs["Telephone"];
        if (strlen($telephone) != 8) return false;
        if (ctype_space($telephone) || ctype_alpha($telephone)) return false;
        
        return true;
    }
}