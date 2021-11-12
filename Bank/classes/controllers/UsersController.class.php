<?php

class UsersController extends UsersTable
{
    private array $inputs;

    public function __construct(string $firstName, string $lastName, string $telephone, string $street, string $house, string $postCode, string $town, string $eID, string $password, string $confirmation, string $dbUsername, int $port = 3306)
    {
        parent::__construct($dbUsername, $port);
        $this->inputs = [
            "First Name" => $firstName,
            "Last Name" => $lastName,
            "Telephone" => $telephone,
            "Street" => $street,
            "House" => $house,
            "Post Code" => $postCode,
            "Town" => $town,
            "eID" => $eID,
            "Password" => $password,
            "Password Repeat" => $confirmation
        ];
    }

    public function register() {
        if ($this->areInputsEmpty() == false) {
            header("Location: ../pages/register.php?error=EmptyInput");
            exit();
        }

        if ($this->checkForValidEId() == false) {
            header("Location: ../pages/register.php?error=InvalidEID");
            exit();
        }

        if ($this->checkPasswords() == false) {
            header("Location: ../pages/register.php?error=PasswordMatch");
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
        $eid = strtoupper($this->inputs["eID"]);
        $userExists = $this->checkUser($eid);

        if ($userExists == false) return false;
        if (strlen($eid) < 7) return false;

        $lastChar = $eid[strlen($eid) - 1];

        if (ctype_digit(strval($lastChar))) return false;
        if ($lastChar != 'L' || $lastChar != 'M') return false;
        return true;
    }

    private function checkPasswords(): bool
    {
        return strcmp($this->inputs["Password"], $this->inputs["Password Repeat"]) == 0;
    }
}